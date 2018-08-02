<?php
/**
 * Created by PhpStorm.
 * User: sofiane.merouane
 * Date: 04/07/2018
 * Time: 16:33
 */

namespace CV\CvBundle\Services;


class ConverterHtml2Pdf {

    protected $html2pdf;

    public function getHtml2Pdf()
    {
        return $this->html2pdf = new \HTML2PDF();
    }
}