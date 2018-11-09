<?php
/**
 * @author Michael Fladischer <michael.fladischer@medunigraz.at>
 * @copyright Copyright (c) 2018, Medizinische Universität Graz
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 */

class OC_Theme {

  /**
   * Returns the current year
   * @return string year
   */
  public function getYear() {
    return strftime('%Y');
  }

  /**
   * Returns the base URL
   * @return string URL
   */
  public function getBaseUrl() {
    return 'https://box.medunigraz.at';
  }

  /**
   * Returns the home URL
   * @return string URL
   */
  public function getHomeUrl() {
    return 'https://www.medunigraz.at';
  }

  /**
   * Returns the URL where the sync clients are listed
   * @return string URL
   */
  public function getSyncClientUrl() {
    return 'https://nextcloud.com/install/#install-clients';
  }

  /**
   * Returns the URL to the App Store for the iOS Client
   * @return string URL
   */
  public function getiOSClientUrl() {
    return 'https://itunes.apple.com/us/app/nextcloud/id1125420102?mt=8';
  }

  /**
   * Returns the AppId for the App Store for the iOS Client
   * @return string AppId
   */
  public function getiTunesAppId() {
    return '1125420102';
  }

  /**
   * Returns the URL to Google Play for the Android Client
   * @return string URL
   */
  public function getAndroidClientUrl() {
    return 'https://play.google.com/store/apps/details?id=com.nextcloud.client';
  }

  /**
   * Returns the documentation URL
   * @return string URL
   */
  public function getDocBaseUrl() {
    return 'https://docs.nextcloud.com';
  }

  /**
   * Returns the title
   * @return string title
   */
  public function getTitle() {
    return 'Box @ Medical University of Graz';
  }

  /**
   * Returns the short name of the software
   * @return string title
   */
  public function getName() {
    return 'Box @ Medical University of Graz';
  }

  /**
   * Returns the short name of the software containing HTML strings
   * @return string title
   */
  public function getHTMLName() {
    return 'Box @ Medical University of Graz';
  }

  /**
   * Returns entity (e.g. company name) - used for footer, copyright
   * @return string entity name
   */
  public function getEntity() {
    return 'Medical University of Graz';
  }

  /**
   * Returns slogan
   * @return string slogan
   */
  public function getSlogan() {
    return 'Sustainable living. learning. researching.';
  }

  /**
   * Returns logo claim
   * @return string logo claim
   */
  public function getLogoClaim() {
    return 'Sustainable living. learning. researching.';
  }

  /**
   * Returns short version of the footer
   * @return string short footer
   */
  public function getShortFooter() {
    $footer = '© '.$this->getYear().' <a href="'.$this->getHomeUrl().'" target="_blank\">'.$this->getEntity().'</a>'.
      '<br/>' . $this->getSlogan();

    return $footer;
  }

  /**
   * Returns long version of the footer
   * @return string long footer
   */
  public function getLongFooter() {
    $footer = '© '.$this->getYear().' <a href="'.$this->getHomeUrl().'" target="_blank\">'.$this->getEntity().'</a>'.
      '<br/>' . $this->getSlogan();

    return $footer;
  }

  public function buildDocLinkToKey($key) {
    return $this->getDocBaseUrl() . '/server/12/go.php?to=' . $key;
  }


  /**
   * Returns mail header color
   * @return string
   */
  public function getColorPrimary() {
    return '#007B3C';
  }

  /**
   * Returns variables to overload defaults from core/css/variables.scss
   * @return array
   */
  public function getScssVariables() {
    return [
      'color-primary' => '#007B3C'
    ];
  }

}
