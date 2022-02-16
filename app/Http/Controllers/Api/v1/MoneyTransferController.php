<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Repositories\UserTransactionRepository;
use Illuminate\Http\Request;

class MoneyTransferController extends Controller
{
    private $userTransaction;

    public function __construct(UserTransactionRepository $userTransaction)
    {
        $this->userTransaction = $userTransaction;
    }

    public function doTransfer(Request $request)
    {
        $result=0;
        //api




        //save transaction info in user transaction table
        $data = [
            'user_id' => $request->user_id,
            'amount' => $result->amount,
            'description' => $result->description,
            'destinationFirstname' => $result->destinationFirstname,
            'destinationLastname' => $result->destinationLastname,
            'destinationNumber' => $result->destinationNumber,
            'inquiryDate' => $result->inquiryDate,
            'inquirySequence' => $result->inquirySequence,
            'inquiryTime' => $result->inquiryTime,
            'message' => $result->message,
            'paymentNumber' => $result->paymentNumber,
            'refCode' => $result->refCode,
            'sourceFirstname' => $result->sourceFirstname,
            'sourceLastname' => $result->sourceLastname,
            'sourceNumber' => $result->sourceNumber,
            'type' => $result->type,
            'reasonDescription' => $result->reasonDescription,
        ];

        if($this->userTransaction->create($data))
        {
            return response([
                'data' => "انتقال وجه با موفقیت انجام شد",
                'status'=>'success'
            ] , 200);
        }

    }
}
