<?php
/**
 * 2007-2020 PrestaShop SA and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\PrestaShop\Core\Session;

/**
 * SessionInterface is used to store/access to the session token used by customers and employees
 */
interface SessionInterface
{
    /**
     * Returns session id
     *
     * @return int
     */
    public function getId();

    /**
     * Set session user id
     *
     * @param int $id
     *
     * @return void
     */
    public function setUserId($id);

    /**
     * Returns session user id
     *
     * @return int
     */
    public function getUserId();

    /**
     * Set session token
     *
     * @param string $string
     *
     * @return void
     */
    public function setToken($string);

    /**
     * Returns session token
     *
     * @return string
     */
    public function getToken();

    /**
     * Adds current object to the database.
     */
    public function add();

    /**
     * Deletes current object from database.
     */
    public function delete();
}
