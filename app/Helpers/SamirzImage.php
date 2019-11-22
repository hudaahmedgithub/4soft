<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SamirzImage
{
	/**
	 * Upload Image to Path
	 * 
	 * @param  object $requestImage
	 * @param  string $uplPath
	 * @param  bool $update
	 * @param  string $oldImage
	 * @return string 
	 */
	public static function uploadImage($requestImage, $uplPath, $update = false, $oldImage = '')
	{
		$image = $requestImage;
		$imageName = $image->getClientOriginalName();
		$extension = $image->getClientOriginalExtension();

		if ($extension != 'svg') {
			list($width, $height) = getimagesize($image);

			if ($width == 0 || $height == 0)
				return 'invalid_dimensions';
		}

		if ($update != false)
			self::removeFile($oldImage);

		$uploadPath = rtrim($uplPath, '/');
		$newName = 'image_' . time() . '_' . mt_rand(1, 1000000000) . '.' . $extension;

		if ($pathToImage = $image->storeAs($uploadPath, $newName)) {
			
			return $pathToImage;
			
		} else {
			return 'unexpected_error';
		}
	}

	/**
	 * Upload Image to Path
	 * 
	 * @param  object $requestImage
	 * @param  string $uplPath
	 * @param  bool $update
	 * @param  string $oldImage
	 * @return string 
	 */
	public static function uploadFile($requestFile, $uplPath, $prefix = 'file', $update = false, $oldFile = '')
	{
		$file = $requestFile;

		if ($update != false)
			self::removeFile($oldFile);

		$fileName = $file->getClientOriginalName();
		$extension = $file->getClientOriginalExtension();

		$uploadPath = rtrim($uplPath, '/');
		$newName = $prefix . '_' . time() . '_' . mt_rand(1, 1000000000) . '.' . $extension;

		if ($pathToFile = $file->storeAs($uploadPath, $newName)) {
			
			return $pathToFile;
			
		} else {
			return 'unexpected_error';
		}
	}

	/**
	 * Remove an Image
	 * 
	 * @param  string $path
	 * @return bool
	 */
	public static function removeFile($path)
	{
		if (Storage::exists($path)) {
			Storage::delete($path);
			return true;
		}

		return false;
	}

	/**
	 * Compress The Image
	 * 
	 * @param  string $source_url
	 * @param  string $destination_url
	 * @param  int $quality
	 * @return string
	 */
	public static function compressImage($source_url, $destination_url, $quality)
	{
		$info = getimagesize($source_url);

		if ($info['mime'] == 'image/jpeg')
			$image = imagecreatefromjpeg($source_url);
		elseif ($info['mime'] == 'image/gif')
			$image = imagecreatefromgif($source_url);
		elseif ($info['mime'] == 'image/png')
			$image = imagecreatefrompng($source_url);

		imagejpeg($image, $destination_url, $quality);

		return $destination_url;
	}

	/**
	 * Validate the image field
	 * 
	 * @return Validator
	 */
	public static function validateImage($request, $inputName = 'image', $mimes = 'jpeg,jpg,png,gif', $maxSize = 5000)
	{
		$valid = Validator::make($request, [
			"$inputName" => "bail|required|mimes:" . $mimes . "|max:" . $maxSize
		], [], [
			"$inputName.required" => 'The image is required',
            "$inputName.mimes" => 'The image must be in type of (jpeg, jpg, png, gif)',
            "$inputName.max" => 'The image can not be more than ' . ($maxSize/1024) . ' MB'
		]);

		return $valid->messages()->messages();
	}
}