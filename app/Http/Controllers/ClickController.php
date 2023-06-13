<?php

namespace App\Http\Controllers;

use App\Libraries\DateUtil;
use App\Services\ClickService;
use Illuminate\Http\JsonResponse;

/**
 * ClickController class.
 *
 * @package App\Http\Controllers
 * @author Lorenzo Enriquez
 * @since 2023.06.14
 */
class ClickController
{
    /**
     * Object for ClickService.
     * 
     * @var ClickService
     */
    private $clickService;

    /**
     * Constructor for ClickController.
     * 
     * @param ClickService $clickService 
     */
    public function __construct(ClickService $clickService)
    {
        $this->clickService = $clickService;
    }

    /**
     * Returns home page.
     * 
     * @return view
     */
    public function showPage()
    {
        return view('welcome');
    }

    /**
     * Returns home page.
     * 
     * @return JsonResponse
     */
    public function getClickCount(): JSONResponse
    {
        return response()->json(['count' => $this->clickService->getClickCount(DateUtil::getDateToday(DateUtil::SQL_DATE_FORMAT))]);
    }

    /**
     * Returns home page.
     * 
     * @return JsonResponse
     */
    public function saveClick(): JSONResponse
    {
        return response()->json(['status' => $this->clickService->addClick()]);
    }
}
