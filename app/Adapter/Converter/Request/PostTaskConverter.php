<?php

namespace App\Adapter\Converter\Request;

use App\Adapter\Converter\RequestConverter;
use App\Domain\Core\Model\ValueObject\Task\Content;
use App\Domain\Core\Model\ValueObject\Task\PersonInCharge;
use App\Domain\Core\Model\ValueObject\Task\Title;
use App\Domain\Core\Service\UsecaseInput\PostTaskInput;
use Exception;

/**
 * Class PostTaskConverter
 * @package App\Adapter\Converter\Request
 */
class PostTaskConverter extends RequestConverter implements PostTaskInput
{
    private Title $title;
    private Content $content;
    private PersonInCharge $personInCharge;

    /**
     * @return void
     * @throws Exception
     */
    protected function execute(): void
    {
        $this->title = new Title((string) $this->request->input('title'));
        $this->content = new Content((string) $this->request->input('content'));
        $this->personInCharge = new PersonInCharge((string) $this->request->input('personInCharge'));
    }

    /**
     * @return Title
     */
    public function getTitle(): Title
    {
        return $this->title;
    }

    /**
     * @return Content
     */
    public function getContent(): Content
    {
        return $this->content;
    }

    /**
     * @return PersonInCharge
     */
    public function getPersonInCharge(): PersonInCharge
    {
        return $this->personInCharge;
    }
}
