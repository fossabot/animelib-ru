<?php
/** This class not usable */
/**
 * Animelib.ru - anime website
 * @author      Markov Daniil <krraify@yandex.ru>
 * @version     beta
 * @date        16.08.2020
 */


class keys
{
    private string $animelib_admin_storage_keyid;
    private string $animelib_admin_storage_secretkey;

    public function __construct()
    {
        if (file_exists(APP_ROOT."/config/keys.ini")) {
            $keys = parse_ini_file(APP_ROOT."/config/keys.ini");
            $this->animelib_admin_storage_keyid = $keys['animelib_admin_storage_keyid'];
            $this->animelib_admin_storage_secretkey = $keys['animelib_admin_storage_secretkey'];
        }
    }

    /**
     * @return string
     */
    final public function getAnimelibAdminStorageKeyid(): string
    {
        return $this->animelib_admin_storage_keyid;
    }

    /**
     * @return string
     */
    final public function getAnimelibAdminStorageSecretkey(): string
    {
        return $this->animelib_admin_storage_secretkey;
    }
}