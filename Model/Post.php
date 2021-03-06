<?php

/*
 * This file is part of the CCDNForum ForumBundle
 *
 * (c) CCDN (c) CodeConsortium <http://www.codeconsortium.com/>
 *
 * Available on github <http://www.github.com/codeconsortium/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CCDNForum\ForumBundle\Model;

use Symfony\Component\Security\Core\User\UserInterface;

use CCDNForum\ForumBundle\Entity\Topic as ConcreteTopic;

abstract class Post
{
    /** @var Topic $topic */
    protected $topic = null;

    /** @var UserInterface $createdBy */
    protected $createdBy;

    /** @var UserInterface $editedBy */
    protected $editedBy = null;

    /** @var UserInterface $deletedBy */
    protected $deletedBy = null;

    /** @var UserInterface $lockedBy */
    protected $lockedBy = null;

    /** @var Attachment $attachment */
    protected $attachment = null;
	
	/**
	 *
	 * @access public
	 */
    public function __construct()
    {
        // your own logic
    }

    /**
     * Get topic
     *
     * @return Topic
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Set topic
     *
     * @param Topic $topic
     * @return Post
     */
    public function setTopic(ConcreteTopic $topic = null)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * Get created_by
     *
     * @return UserInterface
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set created_by
     *
     * @param UserInterface $createdBy
     * @return Post
     */
    public function setCreatedBy(UserInterface $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get edited_by
     *
     * @return UserInterface
     */
    public function getEditedBy()
    {
        return $this->editedBy;
    }

    /**
     * Set edited_by
     *
     * @param UserInterface $editedBy
     * @return Post
     */
    public function setEditedBy(UserInterface $editedBy = null)
    {
        $this->editedBy = $editedBy;

        return $this;
    }

    /**
     * Get deleted_by
     *
     * @return UserInterface
     */
    public function getDeletedBy()
    {
        return $this->deletedBy;
    }

    /**
     * Set deleted_by
     *
     * @param UserInterface $deletedBy
     * @return Post
     */
    public function setDeletedBy(UserInterface $deletedBy = null)
    {
        $this->deletedBy = $deletedBy;

        return $this;
    }

    /**
     * Get locked_by
     *
     * @return UserInterface
     */
    public function getLockedBy()
    {
        return $this->lockedBy;
    }

    /**
     * Set locked_by
     *
     * @param UserInterface $lockedBy
     * @return Post
     */
    public function setLockedBy(UserInterface $lockedBy = null)
    {
        $this->lockedBy = $lockedBy;

        return $this;
    }

//    /**
//     * Get attachment
//     *
//     * @return Attachment
//     */
//    public function getAttachment()
//    {
//        return $this->attachment;
//    }
//
//    /**
//     * Set attachment
//     *
//     * @param  Attachment $attachment
//     * @return Post
//     */
//    public function setAttachment(Attachment $attachment = null)
//    {
//        $this->attachment = $attachment;
//
//        return $this;
//    }
}
