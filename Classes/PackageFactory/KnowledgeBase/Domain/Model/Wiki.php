<?php
namespace PackageFactory\KnowledgeBase\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "PackageFactory.KnowledgeBase".*
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * This represents an installation
 *
 * @Flow\Entity
 */
class Wiki {

	/**
	 * The wiki title
	 *
	 * @var string
	 */
	protected $title;

	/**
	 * The wiki logo
	 *
	 * @var \TYPO3\Flow\Resource\Resource
	 * @ORM\ManyToOne
	 */
	protected $logo;


	/**
	 * Get the title
	 *
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Set the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Get the logo
	 *
	 * @return string
	 */
	public function getLogo() {
		return $this->logo;
	}

	/**
	 * Set the logo
	 *
	 * @param string $logo
	 * @return void
	 */
	public function setLogo(\TYPO3\Flow\Resource\Resource $logo) {
		$this->logo = $logo;
	}

}
