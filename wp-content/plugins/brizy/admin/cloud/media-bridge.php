<?php

/**
 * Class Brizy_Admin_Cloud_BlockUploader
 */
class Brizy_Admin_Cloud_MediaBridge extends Brizy_Admin_Cloud_AbstractBridge {

	use Brizy_Editor_Asset_AttachmentAware;

	/**
	 * This is the block id for which we are importing the media
	 * If this  is not set the import will fail.
	 *
	 * @var int
	 */
	private $blockId;

	/**
	 * @param $mediaUid
	 *
	 * @return mixed|void
	 * @throws Exception
	 */
	public function export( $mediaUid ) {

		$mediaId = (int) $this->getAttachmentByMediaName( $mediaUid );

		if ( ! $mediaId ) {
			throw new Exception( "Unable to find media {$mediaUid}" );
		}

		if ( $this->client->isMediaUploaded( $mediaUid ) ) {
			return true;
		}

		$filePath = get_attached_file( $mediaId );
		$this->client->uploadMedia( $mediaUid, $filePath );
	}

	/**
	 * @param $mediaUid
	 *
	 * @return mixed|void
	 * @throws Exception
	 */
	public function import( $mediaUid ) {

		if ( ! $this->blockId ) {
			throw new Exception( 'The block id is not set.' );
		}

		$media_cacher = new Brizy_Editor_CropCacheMedia( $this->client->getBrizyProject(), $this->blockId );
		$media_cacher->download_original_image( $mediaUid, false );
	}

	/**
	 * @param $layoutId
	 *
	 * @return mixed|void
	 * @throws Exception
	 */
	public function delete( $layoutId ) {
		throw new Exception( 'Not implemented' );
	}

	/**
	 * @param int $blockId
	 *
	 * @return Brizy_Admin_Cloud_MediaBridge
	 */
	public function setBlockId( $blockId ) {
		$this->blockId = (int) $blockId;

		return $this;
	}


}
