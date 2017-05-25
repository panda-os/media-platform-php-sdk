<?php
/**
 * Created by PhpStorm.
 * User: leon
 * Date: 24/05/2017
 * Time: 16:55
 */

namespace Wix\Mediaplatform\Model\Job;


use Wix\Mediaplatform\Model\Response\RestResponse;

class FileImportJob extends Job
{
    /**
     * @var string
     */
    public static $job_type = "urn:job:import.file";

    /**
     * @var ImportFileSpecification
     */
    private $specification;

    /**
     * @var RestResponse
     */
    private $result;

    /**
     * @return ImportFileSpecification
     */
    public function getSpecification() {
        return $this->specification;
    }

    /**
     * @return RestResponse
     */
    public function getResult() {
        return $this->result;
    }
}