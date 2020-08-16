<?php 

class Comment 
{
    protected $id,
              $gameId,
              $userId,
              $content,
              $report,
              $commentDate;

    public function __construct( $values = [])
    {    
        if (!empty($values))
        {
            $this->hydrate($values);
        }
    }

    public function hydrate($datas)
    {
        foreach ($datas as $attribut => $value)
        {
            $method = 'set'.ucfirst($attribut);

            if (is_callable([$this, $method]))
            {
                $this->$method($value);
            }
        }
    } 
    
    public function isValid()
    {
        return !(empty($this->content));
    }

    public function setId($id)
    {
        $this->id = (int) $id;
    }

    public function setGameId($gameId)
    {
        $this->gameId = (int) $gameId;
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

    public function gameId()
    {
        return $this->gameId;
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