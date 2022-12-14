<?php

namespace yzh52521\Aliyun\Services;

use GuzzleHttp\HandlerStack;
use yzh52521\Aliyun\BaseService;
use yzh52521\Aliyun\RpcStack;

/**
 * Class Live
 *
 * 直播拉流
 * @method addLivePullStreamInfoConfig( array $params ) 添加拉流
 * @method deleteLivePullStreamInfoConfig( array $params ) 删除拉流
 * @method describeLivePullStreamConfig( array $params ) 查询拉流信息
 *
 * 直播流管理
 * @method describeLiveStreamsBlockList( array $params ) 查询推流黑名单列表
 * @method describeLiveStreamsControlHistory( array $params ) 查询流控历史
 * @method describeLiveStreamBitRateData( array $params ) 查询直播流历史帧率和码率
 * @method describeLiveStreamsOnlineList( array $params ) 查询推流在线列表
 * @method describeLiveStreamsPublishList( array $params ) 查询推流历史
 * @method forbidLiveStream( array $params ) 禁止直播流推送
 * @method resumeLiveStream( array $params ) 恢复直播流推送
 * @method describeLiveStreamOnlineUserNum( array $params ) 查询在线人数
 * @method describeLiveStreamsFrameRateAndBitRateData( array $params ) 查询直播流实时帧率和码率
 * @method describeLiveStreamHistoryUserNum( array $params ) 查询直播流历史在线人数
 *
 * 状态通知
 * @method setLiveStreamsNotifyUrlConfig( array $params ) 设置NotifyURL
 * @method describeLiveStreamsNotifyUrlConfig( array $params ) 查询NotifyURL
 * @method deleteLiveStreamsNotifyUrlConfig( array $params ) 删除NotifyURL
 *
 * 直播转码
 * @method addLiveStreamTranscode( array $params ) 添加转码配置
 * @method deleteLiveStreamTranscode( array $params ) 删除转码配置
 * @method describeLiveStreamTranscodeInfo( array $params ) 查询转码配置信息
 *
 * 直播转点播
 * @method AddLiveRecordVodConfig( array $params ) 添加直转点设置
 * @method DeleteLiveRecordVodConfig( array $params ) 删除直转点设置
 * @method DescribeLiveRecordVodConfigs( array $params ) 查询直转点配置
 *
 * 直播连麦
 * @method addLiveMixConfig( array $params ) 添加连麦配置
 * @method describeLiveMixConfig( array $params ) 查询连麦配置
 * @method deleteLiveMixConfig( array $params ) 删除连麦配置
 * @method startMultipleStreamMixService( array $params ) 开启多人连麦服务
 * @method stopMultipleStreamMixService( array $params ) 停止多人连麦服务
 * @method addMultipleStreamMixService( array $params ) 向主流添加一路流
 * @method removeMultipleStreamMixService( array $params ) 从主流移除一路流
 * @method addLiveMixNotifyConfig( array $params ) 添加连麦回调配置
 * @method describeLiveMixNotifyConfig( array $params ) 查询连麦回调配置
 * @method updateLiveMixNotifyConfig( array $params ) 更新连麦回调配置
 * @method deleteLiveMixNotifyConfig( array $params ) 删除连麦回调配置
 *
 * 直播录制
 * @method addLiveAppRecordConfig( array $params ) 添加APP录制配置
 * @method deleteLiveAppRecordConfig( array $params ) 删除APP录制配置
 * @method describeLiveRecordConfig( array $params ) 查询域名下录制配置列表
 * @method describeLiveStreamRecordContent( array $params ) 查询录制内容
 * @method createLiveStreamRecordIndexFiles( array $params ) 创建录制索引文件
 * @method describeLiveStreamRecordIndexFile( array $params ) 查询单个录制索引文件
 * @method describeLiveStreamRecordIndexFiles( array $params ) 查询录制索引文件
 * @method addLiveRecordNotifyConfig( array $params ) 添加录制回调配置
 * @method deleteLiveRecordNotifyConfig( array $params ) 删除录制回调配置
 * @method describeLiveRecordNotifyConfig( array $params ) 查询录制回调配置
 * @method updateLiveRecordNotifyConfig( array $params ) 更新录制回调配置
 *
 * 直播截图
 * @method addLiveAppSnapshotConfig( array $params ) 添加截图配置
 * @method deleteLiveAppSnapshotConfig( array $params ) 删除截图配置
 * @method describeLiveSnapshotConfig( array $params ) 查询域名下的截图配置
 * @method updateLiveAppSnapshotConfig( array $params ) 更新截图配置
 * @method describeLiveStreamSnapshotInfo( array $params ) 查询截图信息
 *
 * 直播审核
 * @method addLiveSnapshotDetectPornConfig( array $params ) 添加审核配置
 * @method addLiveDetectNotifyConfig( array $params ) 添加审核回调
 * @method describeLiveSnapshotDetectPornConfig( array $params ) 查询审核配置
 * @method describeLiveDetectNotifyConfig( array $params ) 查询审核回调
 * @method updateLiveSnapshotDetectPornConfig( array $params ) 更新审核配置
 * @method updateLiveDetectNotifyConfig( array $params ) 更新审核回调
 * @method deleteLiveSnapshotDetectPornConfig( array $params ) 删除审核配置
 * @method deleteLiveDetectNotifyConfig( array $params ) 删除审核回调
 *
 * 导播
 * @method addCasterLayout( array $params ) 添加布局
 * @method addCasterVideoResource( array $params ) 添加视频源
 * @method copyCaster( array $params ) 复制导播台
 * @method copyCasterSceneConfig( array $params ) 复制场景配置
 * @method createCaster( array $params ) 创建导播台
 * @method addCasterComponent( array $params ) 添加组件
 * @method deleteCaster( array $params ) 删除导播台
 * @method deleteCasterLayout( array $params ) 删除布局
 * @method deleteCasterVideoResource( array $params ) 删除视频源
 * @method describeCasterConfig( array $params ) 查询配置
 * @method describeCasterLayouts( array $params ) 查询布局列表
 * @method describeCasters( array $params ) 查询导播台列表
 * @method describeCasterScenes( array $params ) 查询导播台场景列表
 * @method describeCasterStreamUrl( array $params ) 查询导播台流地址
 * @method describeCasterVideoResources( array $params ) 查询视频源
 * @method effectCasterUrgent( array $params ) 切换备播
 * @method effectCasterVideoResource( array $params ) 更新备播
 * @method modifyCasterLayout( array $params ) 修改布局
 * @method modifyCasterVideoResource( array $params ) 修改视频源
 * @method setCasterConfig( array $params ) 配置导播台
 * @method setCasterSceneConfig( array $params ) 设置场景配置
 * @method startCaster( array $params ) 启动导播台
 * @method startCasterScene( array $params ) 启动场景
 * @method stopCaster( array $params ) 停止导播台
 * @method stopCasterScene( array $params ) 停止场景
 * @method updateCasterSceneConfig( array $params ) 更新导播场景配置
 * @method deleteCasterComponent( array $params ) 删除组件
 * @method describeCasterComponents( array $params ) 查询组件列表
 * @method modifyCasterComponent( array $params ) 修改组件
 *
 * @see https://help.aliyun.com/document_detail/48207.html
 */
class Live extends BaseService
{
    public function getBaseUri()
    {
        return 'https://live.aliyuncs.com';
    }

    /**
     * @var string
     */
    public $version = '2016-11-01';

    /**
     * @var string 推流域名
     */
    public $domain;

    /**
     * @var string 推流鉴权
     */
    public $pushKey;

    /**
     * @var string 媒体中心地址
     */
    public $pushDomain = 'video-center.alivecdn.com';

    /**
     * @var string 录像播放域名，通常是OSS地址
     */
    public $recordDomain;

    /**
     * @var string 录像播放鉴权
     */
    public $recordKey;

    /**
     * @var bool 是否使用安全连接
     */
    public $secureConnection = true;

    /**
     * @var int 推流签名有效期,默认有效期是一周
     */
    public $authTime = 604800;

    /**
     * @var int 签名过期时间
     */
    private $expirationTime;

    /**
     * @var string 播放地址
     */
    private $httpPlayUrl;

    public function init()
    {
        parent::init();
        //初始化过期时间
        $this->expirationTime = time() + $this->authTime;
        //播放地址前半段
        $this->httpPlayUrl = ( $this->secureConnection ? 'https://' : 'http://' ).$this->domain;
        if (empty ( $this->domain )) {
            throw new \Exception ( 'The "domain" property must be set.' );
        }
        if (empty ( $this->recordDomain )) {
            throw new \Exception ( 'The "recordDomain" property must be set.' );
        }
    }

    /**
     * 获取推流地址
     * @param string $appName 应用名称
     * @return string
     */
    public function getPushPath($appName)
    {
        return "rtmp://{$this->pushDomain}/{$appName}/";
    }

    /**
     * 获取串码流
     * @param string $appName 应用名称
     * @param string $streamName 直播流名称
     * @return string
     */
    public function getPushArg($appName,$streamName)
    {
        return $streamName.$this->pushSignature( $appName,$streamName );
    }

    /**
     * 获取直播推流地址
     * @param string $appName 应用名称
     * @param string $streamName 直播流名称
     * @return string
     */
    public function getPushUrl($appName,$streamName)
    {
        return $this->getPushPath( $appName ).$this->getPushArg( $appName,$streamName );
    }

    /**
     * 获取阿里云播放地址
     * @param string $appName 应用名称
     * @param string $streamName 直播流名称
     * @return array
     */
    public function getPlayUrls($appName,$streamName)
    {
        return [
            'rtmp'    => $this->getPlayUrlForRTMP( $appName,$streamName ),
            'rtmp_sd' => $this->getPlayUrlForRTMP( $appName,$streamName,'sd' ),
            'rtmp_hd' => $this->getPlayUrlForRTMP( $appName,$streamName,'hd' ),
            'flv'     => $this->getPlayUrlForFLV( $appName,$streamName ),
            'flv_sd'  => $this->getPlayUrlForFLV( $appName,$streamName,'sd' ),
            'flv_hd'  => $this->getPlayUrlForFLV( $appName,$streamName,'hd' ),
            'hls'     => $this->getPlayUrlForHls( $appName,$streamName ),
        ];
    }

    /**
     * 获取RTMP拉流地址
     * @param string $appName 应用名称
     * @param string $streamName 直播流名称
     * @param string $clarity 转码模板名称
     * @return string
     */
    public function getPlayUrlForRTMP($appName,$streamName,$clarity = null)
    {
        $uri = "/{$appName}/{$streamName}";
        if (!is_null( $clarity )) {
            $uri .= '_'.$clarity;
        }
        return 'rtmp://'.$this->domain.$uri.$this->generateSignature( $uri,$this->pushKey );
    }

    /**
     * 获取FLV播放地址
     * @param string $appName 应用名称
     * @param string $streamName 直播流名称
     * @param string $clarity 转码模板名称
     * @return string
     */
    public function getPlayUrlForFLV($appName,$streamName,$clarity = null)
    {
        $uri = "/{$appName}/{$streamName}";
        if (!is_null( $clarity )) {
            $uri .= '_'.$clarity;
        }
        $uri .= '.flv';
        return $this->httpPlayUrl.$uri.$this->generateSignature( $uri,$this->pushKey );
    }

    /**
     * 获取M3U8播放地址
     * @param string $appName 应用名称
     * @param string $streamName 直播流名称
     * @param string $clarity 转码模板名称
     * @return string
     */
    public function getPlayUrlForHls($appName,$streamName,$clarity = null)
    {
        $uri = "/{$appName}/{$streamName}";
        if (!is_null( $clarity )) {
            $uri .= '_'.$clarity;
        }
        $uri .= '.m3u8';
        return $this->httpPlayUrl.$uri.$this->generateSignature( $uri,$this->pushKey );
    }

    /**
     * 获取录像播放地址
     * @param string $uri
     * @return string
     */
    public function getRecordUrl($uri)
    {
        $uri = '/'.rtrim( $uri,'/' );
        return ( $this->secureConnection ? 'https://' : 'http://' ).$this->recordDomain.$uri.$this->generateSignature( $uri,$this->recordKey );
    }

    /**
     * 推流签名
     * @param string $appName 应用名称
     * @param string $streamName 直播流名称
     * @return string
     */
    protected function pushSignature($appName,$streamName)
    {
        $uri = "/{$appName}/{$streamName}";
        if ($this->pushKey) {
            $authKey = "?vhost={$this->domain}&auth_key={$this->expirationTime}-0-0-".md5( "{$uri}-{$this->expirationTime}-0-0-{$this->pushKey}" );
        } else {
            $authKey = "?vhost={$this->domain}";
        }
        return $authKey;
    }

    /**
     * 生成 录像播放 签名
     * @param string $uri
     * @param string $key 签名密钥
     * @return string
     */
    protected function generateSignature($uri,$key = null)
    {
        $authKey = '';
        if ($key) {
            $authKey = "?auth_key={$this->expirationTime}-0-0-".md5( "{$uri}-{$this->expirationTime}-0-0-{$key}" );
        }
        return $authKey;
    }

    /**
     * @return HandlerStack
     */
    public function getHttpStack()
    {
        $stack      = HandlerStack::create();
        $middleware = new RpcStack( [
            'accessKeyId'  => $this->accessId,
            'accessSecret' => $this->accessKey,
            'version'      => $this->version,
        ] );
        $stack->push( $middleware );
        return $stack;
    }
}