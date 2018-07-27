<?php
/**
 * 测试基类控制器
 *
 * @author lingyun <niulingyun@camera360.com>
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 * Date: 12/10/2017
 */

namespace App\Controllers\Test;


use PG\MSF\Controllers\Controller;

class TestBaseController extends Controller
{
    public function actionIndex()
    {
        $client = $this->getObject(Client::class);
        yield $client->goDnsLookup('http://www.baidu.com/');
        $sendGet = $client->goGet("/");
        $result = yield $sendGet;
        $this->outputView(['html'=>$result['body']]);
    }
}
