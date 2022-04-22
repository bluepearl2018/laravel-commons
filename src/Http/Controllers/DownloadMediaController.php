<?php

namespace Eutranet\Commons\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

/**
 * This is intended to download files and messages from the back-office
 */
class DownloadMediaController extends Controller
{
	public function __construct()
	{

	}

	/**
	 * @param User|null $user
	 * @param Media $mediaItem
	 * @return BinaryFileResponse
	 */
	public function show(?User $user, Media $mediaItem): BinaryFileResponse
	{
		return response()->download($mediaItem->getPath());
	}
}
