<?php
namespace Luke\Cc;

/**
 * 用户模块
 */
class User extends Api
{
    /**
     * 注册用户
     * @param string $mobile
     * @param string $code
     * @param string $rmobile
     * @param string $password
     * @param string $platform
     * @return array
     */
    public function regist($mobile, $code, $rmobile = '', $password = '', $platform = '')
    {
        $options = [
            'form_params'  => [
                'sourcePlatform'=> $platform,
                'phone'         => $mobile,
                'code'          => $code,
                'pphone'        => $rmobile,
                'password'      => $password
            ]
        ];
        return $this->request('POST', '/user/register', $options);
    }
    
    /**
     * 获取用户信息
     * @param string $accessToken
     * @param string $mobile
     * @return array
     */
    public function getInfo($accessToken, $mobile = '')
    {
        $options = empty($mobile) ? ['headers' => ['Authorization' => $accessToken]] : ['form_params' => ['phone' => $mobile]];
        return $this->request('POST', '/user/getinfo', $options);
    }
    
    /**
     * 忘记密码(验证手机验证码)
     * @param string $mobile
     * @param string $code
     * @param string $password
     * @return array
     */
    public function forgetPassword($mobile, $code, $password)
    {
        $options = [
            'form_params'  => [
                'phone'         => $mobile,
                'code'          => $code,
                'password'      => $password
            ]
        ];
        return $this->request('POST', '/user/resetByCode', $options);
    }
    
}