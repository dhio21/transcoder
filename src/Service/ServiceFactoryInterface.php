<?php
/**
 * This file is part of the arhitector/transcoder library.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author    Dmitry Arhitector <dmitry.arhitector@yandex.ru>
 *
 * @license   http://opensource.org/licenses/MIT MIT
 * @copyright Copyright (c) 2017 Dmitry Arhitector <dmitry.arhitector@yandex.ru>
 */
namespace Arhitector\Transcoder\Service;

/**
 * Interface ServiceFactoryInterface.
 *
 * @package Arhitector\Transcoder\Service
 */
interface ServiceFactoryInterface
{
	
	/**
	 * Gets the options.
	 *
	 * @return array
	 */
	public function getOptions();
	
	/**
	 * Sets the options value.
	 *
	 * @param array $options
	 *
	 * @return $this
	 */
	public function setOptions(array $options);
	
	/**
	 * Get the decoder instance.
	 *
	 * @param array $options
	 *
	 * @return DecoderInterface
	 */
	public function getDecoderService(array $options = []);
	
	/**
	 * Get the encoder instance.
	 *
	 * @param array $options
	 *
	 * @return EncoderInterface
	 */
	public function getEncoderService(array $options = []);
	
}