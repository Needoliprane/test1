<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use Doctrine\ODM\MongoDB\DocumentManager;

use App\Document\User;

class UserController extends AbstractController
{

    private function checkHeader(Request $request, DocumentManager $dm) : String
    {
        $id = $request->headers->get('authorization');
        /*
            header processing
        */
        $user = $dm->getRepository(User::class)->find($id);
        if ($user == null) {
            return "";
        }
        return $id;
    }

    /**
     * @Route("/api/register", name="register", methods={"POST"} )
     */
    public function register(Request $request, DocumentManager $dm): JsonResponse
    {
        try {
            $user = new User();
            $user->setLogin($request->request->get("login"));
            $user->setPassword($request->request->get("password"));
            $user->setEmail($request->request->get("email"));
            $user->setFirstname($request->request->get("firstname"));
            $user->setLastname($request->request->get("lastname"));

            $dm->persist($user);
            $dm->flush();

            return new JsonResponse([
                'success' => true,
                'code'    => 201,
            ], 201);
        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'code'    => $e->getCode(),
                'message' => $e->getMessage(),
            ],500);
        }
    }

    /**
     * @Route("/api/login", name="login", methods={"POST"} )
     */
    public function login(Request $request, DocumentManager $dm): JsonResponse
    {
        try {
            $user = $dm->createQueryBuilder(User::class)
                ->field('login')->equals($request->request->get("login"))
                ->field('password')->equals($request->request->get("password"))
                ->getQuery()
                ->getSingleResult();
            if ($user != NULL) {
                return new JsonResponse([
                    'token' => base64_encode($user->getId()),
                    'id' => $user->getId(),
                ], 200);
            }
            return new JsonResponse([
                'error' => 'login failed',
            ], 401);
        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'error' => $e->getMessage(),
            ],500);
        }
    }

    /**
     * @Route("/api/user", name="userUpdate", methods={"PUT"} )
     */
    public function userUpdate(Request $request, DocumentManager $dm): JsonResponse
    {
        $id = $this->checkHeader($request, $dm);
        if ($id == null) {
            return new JsonResponse([
                'message' => 'Wrong token',
            ],403);
        }
        try {
            $user = $dm->getRepository(User::class)->find($id);

            $user->setLogin($request->request->get("login"));
            $user->setPassword($request->request->get("password"));
            $user->setEmail($request->request->get("email"));
            $user->setFirstname($request->request->get("firstname"));
            $user->setLastname($request->request->get("lastname"));

            $dm->persist($user);
            $dm->flush();
            return new JsonResponse([
                'success' => true
            ], 201);
        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'code'    => $e->getCode(),
                'message' => $e->getMessage(),
            ],500);
        }
    }

    /**
     * @Route("/api/user", name="userDelete", methods={"DELETE"} )
     */
    public function userDelete(Request $request, DocumentManager $dm): JsonResponse
    {
        $id = $this->checkHeader($request, $dm);
        if ($id == null) {
            return new JsonResponse([
                'message' => 'Wrong token',
            ],403);
        }
        try {
            $user = $dm->getRepository(User::class)->find($id);
            $dm->remove($user);
            return new JsonResponse([
                'success' => true,
            ], 201);
        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'code'    => $e->getCode(),
                'message' => $e->getMessage(),
            ],500);
        }
    }

    /**
     * @Route("/api/user", name="displayUser", methods={"GET"} )
     */
    public function displayUser(Request $request, DocumentManager $dm): JsonResponse
    {
        $id = $this->checkHeader($request, $dm);
        if ($id == null) {
            return new JsonResponse([
                'message' => 'Wrong token',
            ],403);
        }
        try {
            $user = $dm->getRepository(User::class)->find($id);
            $dm->flush();
            return new JsonResponse([
                'success' => true,
                'login' => $user->getLogin($request->request->get("login")),
                'email' => $user->getEmail($request->request->get("email")),
                'firstname' => $user->getFirstname($request->request->get("firstname")),
                'lastname' => $user->getLastname($request->request->get("lastname")),
            ], 200);
        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'code'    => $e->getCode(),
                'message' => $e->getMessage(),
            ],500);
        }
    }
}
