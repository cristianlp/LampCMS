<?php
/**
 *
 * License, TERMS and CONDITIONS
 *
 * This software is lisensed under the GNU LESSER GENERAL PUBLIC LICENSE (LGPL) version 3
 * Please read the license here : http://www.gnu.org/licenses/lgpl-3.0.txt
 *
 *  Redistribution and use in source and binary forms, with or without
 *  modification, are permitted provided that the following conditions are met:
 * 1. Redistributions of source code must retain the above copyright
 *    notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright
 *    notice, this list of conditions and the following disclaimer in the
 *    documentation and/or other materials provided with the distribution.
 * 3. The name of the author may not be used to endorse or promote products
 *    derived from this software without specific prior written permission.
 *
 * ATTRIBUTION REQUIRED
 * 4. All web pages generated by the use of this software, or at least
 * 	  the page that lists the recent questions (usually home page) must include
 *    a link to the http://www.lampcms.com and text of the link must indicate that
 *    the website\'s Questions/Answers functionality is powered by lampcms.com
 *    An example of acceptable link would be "Powered by <a href="http://www.lampcms.com">LampCMS</a>"
 *    The location of the link is not important, it can be in the footer of the page
 *    but it must not be hidden by style attibutes
 *
 * THIS SOFTWARE IS PROVIDED BY THE AUTHOR "AS IS" AND ANY EXPRESS OR IMPLIED
 * WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 * IN NO EVENT SHALL THE FREEBSD PROJECT OR CONTRIBUTORS BE LIABLE FOR ANY
 * DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
 * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF
 * THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This product includes GeoLite data created by MaxMind,
 *  available from http://www.maxmind.com/
 *
 *
 * @author     Dmitri Snytkine <cms@lampcms.com>
 * @copyright  2005-2012 (or current year) Dmitri Snytkine
 * @license    http://www.gnu.org/licenses/lgpl-3.0.txt GNU LESSER GENERAL PUBLIC LICENSE (LGPL) version 3
 * @link       http://www.lampcms.com   Lampcms.com project
 * @version    Release: @package_version@
 *
 *
 */


/**
 * API Controller to get
 * array of tags that specific user (uid param) is
 * most actively posting questions or answers
 * 
 * @todo may implement the limit of no
 * more than 1000 results. It's unlikely
 * for user to have more anyway.
 *
 */
namespace Lampcms\Api\v1;

use Lampcms\Api\Api;

class Usertags extends Api
{

	protected $aRequired = array('uid');
	
	/**
	 * Array of data found
	 * in USER_TAGS for one user
	 * 
	 * @var array
	 */
	protected $aData = array();

	protected function main(){
		$this->getData()
		->setOutput();
	}

	
	/**
	 * Get User Tags data for user identified by uid 
	 * request param and set result as
	 * $this->aData
	 * 
	 * @throws \Lampcms\HttpResponseCodeException if no record
	 * exists for this user
	 * 
	 * @return object $this
	 */
	protected function getData(){
		$uid = $this->Request->get('uid', 'i', 0);
		$this->aData = $this->Registry->Mongo->USER_TAGS->findOne(
			array('_id' => $uid)
		);

		if(empty($this->aData)){
			throw new \Lampcms\HttpResponseCodeException('No User tags found for userid '.$uid, 404);
		}
		
		return $this;
	}


	/**
	 *
	 * Set to $this->Output object with
	 * data from $this->aData
	 *
	 * @return object $this
	 */
	protected function setOutput(){
		$this->Output->setData($this->aData);

		return $this;
	}
}
