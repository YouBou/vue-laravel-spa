<?php

namespace App\Adapter\Converter\Request;

use App\Adapter\Converter\RequestConverter;
use App\Domain\Core\Model\ValueObject\Task\Content;
use App\Domain\Core\Model\ValueObject\Task\PersonInCharge;
use App\Domain\Core\Model\ValueObject\Task\TaskId;
use App\Domain\Core\Model\ValueObject\Task\Title;
use App\Domain\Core\Service\UsecaseInput\PutTaskInput;
use Exception;

/**
 * Class PutTaskConverter
 * @package App\Adapter\Converter\Request
 */
class PutTaskConverter extends RequestConverter implements PutTaskInput
{
    private TaskId $taskId;
    private Title $title;
    private Content $content;
    private PersonInCharge $personInCharge;

    /**
     * @return void
     * @throws Exception
     */
    protected function execute(): void
    {
        $this->taskId = new TaskId((string) $this->request->route('taskId'));
        $this->title = new Title($this->request->input('title'));
        $this->content = new Content($this->request->input('content'));
        $this->personInCharge = new PersonInCharge($this->request->input('personInCharge'));
    }

    /**
     * @return TaskId
     */
    public function getTaskId(): TaskId
    {
        return $this->taskId;
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
