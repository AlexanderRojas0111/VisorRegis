<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * @OA\Schema(
 *      schema="Transation",
 *      required={"user_id","qrcode_id","amount","status"},
 *      @OA\Property(
 *          property="user_id",
 *          description="",
 *          readOnly=false,
 *          nullable=false,
 *          type="integer",
 *          format="int32"
 *      ),
 *      @OA\Property(
 *          property="qrcode_ower_id",
 *          description="",
 *          readOnly=false,
 *          nullable=true,
 *          type="integer",
 *          format="int32"
 *      ),
 *      @OA\Property(
 *          property="qrcode_id",
 *          description="",
 *          readOnly=false,
 *          nullable=false,
 *          type="integer",
 *          format="int32"
 *      ),
 *      @OA\Property(
 *          property="payment_method",
 *          description="",
 *          readOnly=false,
 *          nullable=true,
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="message",
 *          description="",
 *          readOnly=false,
 *          nullable=true,
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="amount",
 *          description="",
 *          readOnly=false,
 *          nullable=false,
 *          type="number",
 *          format="number"
 *      ),
 *      @OA\Property(
 *          property="status",
 *          description="",
 *          readOnly=false,
 *          nullable=false,
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="created_at",
 *          description="",
 *          readOnly=true,
 *          nullable=true,
 *          type="string",
 *          format="date-time"
 *      ),
 *      @OA\Property(
 *          property="updated_at",
 *          description="",
 *          readOnly=true,
 *          nullable=true,
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */class Transation extends Model
{
     use SoftDeletes;    public $table = 'transaction';

    public $fillable = [
        'user_id',
        'qrcode_ower_id',
        'qrcode_id',
        'payment_method',
        'message',
        'amount',
        'status'
    ];

    protected $casts = [
        'user_id' => 'integer',
        'qrcode_ower_id' => 'integer',
        'qrcode_id' => 'integer',
        'payment_method' => 'string',
        'amount' => 'float',
        'status' => 'string'
    ];

    public static array $rules = [
        'user_id' => 'required',
        'qrcode_ower_id' => 'nullable',
        'qrcode_id' => 'required',
        'payment_method' => 'nullable',
        'message' => 'nullable',
        'amount' => 'required',
        'status' => 'required'
    ];

    
}
