<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateQrcodeAPIRequest;
use App\Http\Requests\API\UpdateQrcodeAPIRequest;
use App\Models\Qrcode;
use App\Repositories\QrcodeRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;

/**
 * Class QrcodeController
 */

class QrcodeAPIController extends AppBaseController
{
    private QrcodeRepository $qrcodeRepository;

    public function __construct(QrcodeRepository $qrcodeRepo)
    {
        $this->qrcodeRepository = $qrcodeRepo;
    }

    /**
     * @OA\Get(
     *      path="/qrcodes",
     *      summary="getQrcodeList",
     *      tags={"Qrcode"},
     *      description="Get all Qrcodes",
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  type="array",
     *                  @OA\Items(ref="#/components/schemas/Qrcode")
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request): JsonResponse
    {
        $qrcodes = $this->qrcodeRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($qrcodes->toArray(), 'Qrcodes retrieved successfully');
    }

    /**
     * @OA\Post(
     *      path="/qrcodes",
     *      summary="createQrcode",
     *      tags={"Qrcode"},
     *      description="Create Qrcode",
     *      @OA\RequestBody(
     *        required=true,
     *        @OA\JsonContent(ref="#/components/schemas/Qrcode")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  ref="#/components/schemas/Qrcode"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateQrcodeAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        $qrcode = $this->qrcodeRepository->create($input);

        return $this->sendResponse($qrcode->toArray(), 'Qrcode saved successfully');
    }

    /**
     * @OA\Get(
     *      path="/qrcodes/{id}",
     *      summary="getQrcodeItem",
     *      tags={"Qrcode"},
     *      description="Get Qrcode",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of Qrcode",
     *           @OA\Schema(
     *             type="integer"
     *          ),
     *          required=true,
     *          in="path"
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  ref="#/components/schemas/Qrcode"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id): JsonResponse
    {
        /** @var Qrcode $qrcode */
        $qrcode = $this->qrcodeRepository->find($id);

        if (empty($qrcode)) {
            return $this->sendError('Qrcode not found');
        }

        return $this->sendResponse($qrcode->toArray(), 'Qrcode retrieved successfully');
    }

    /**
     * @OA\Put(
     *      path="/qrcodes/{id}",
     *      summary="updateQrcode",
     *      tags={"Qrcode"},
     *      description="Update Qrcode",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of Qrcode",
     *           @OA\Schema(
     *             type="integer"
     *          ),
     *          required=true,
     *          in="path"
     *      ),
     *      @OA\RequestBody(
     *        required=true,
     *        @OA\JsonContent(ref="#/components/schemas/Qrcode")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  ref="#/components/schemas/Qrcode"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateQrcodeAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var Qrcode $qrcode */
        $qrcode = $this->qrcodeRepository->find($id);

        if (empty($qrcode)) {
            return $this->sendError('Qrcode not found');
        }

        $qrcode = $this->qrcodeRepository->update($input, $id);

        return $this->sendResponse($qrcode->toArray(), 'Qrcode updated successfully');
    }

    /**
     * @OA\Delete(
     *      path="/qrcodes/{id}",
     *      summary="deleteQrcode",
     *      tags={"Qrcode"},
     *      description="Delete Qrcode",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of Qrcode",
     *           @OA\Schema(
     *             type="integer"
     *          ),
     *          required=true,
     *          in="path"
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id): JsonResponse
    {
        /** @var Qrcode $qrcode */
        $qrcode = $this->qrcodeRepository->find($id);

        if (empty($qrcode)) {
            return $this->sendError('Qrcode not found');
        }

        $qrcode->delete();

        return $this->sendSuccess('Qrcode deleted successfully');
    }
}
