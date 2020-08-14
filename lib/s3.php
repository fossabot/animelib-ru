<?php


namespace lib;

use Aws\S3\S3Client;
use Aws\Exception\AwsException;

class s3
{
    public function upload_file(): void
    {
        $s3 = S3Client::factory(array(
            'bucket_endpoint' => 'https://storage.yandexcloud.net',
            'version' => 'latest',
            'region'  => 'ru-central1',
            'key' => '',
            'secret'  => ''
        ));

        $result = $s3->putObject(array(
            'Bucket'       => 'animelib-s3-stoke',
            'Key'          => $keyname,
            'SourceFile'   => $filepath,
        ));
    }
}