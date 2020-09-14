<?php 

namespace Project\lib\entity;

class CommentNews extends Entity
{
    protected $id,
              $newsId,
              $userId,
              $content,
              $report,
              $commentDate;

    
    public function isValid()
    {
        return !(empty($this->content));
    }

    public function setId($id)
    {
        $this->id = (int) $id;
    }

    public function setGameId($newsId)
    {
        $this->newsId = (int) $newsId;
    }

    public function setUserId($userId)
    {
        $this->userId = (int) $userId;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function setReport($report)
    {
        $this->report = $report;
    }

    public function setCommentDate($commentDate)
    {
        $this->commentDate = $commentDate;
    }

    public function id()
    {
        return $this->id;
    }

    public function newsId()
    {
        return $this->newsId;
    }

    public function userId()
    {
        return $this->userId;
    }
    
    public function content()
    {
        return $this->content;
    }

    public function report()
    {
        return $this->report;
    }

    public function commentDate()
    {
        return $this->commentDate;
    }
}