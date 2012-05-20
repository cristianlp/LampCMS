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


namespace Lampcms;


class MockQuestion extends Question
{

	protected $JSON_ENCODED = '{"_id":510,"title":"Mock Stub Post","b":"<span>This is a simple <em class=\"wtag\">mock<\/em> question<\/span>","hash":"ae2cabbd5072f31fe927ce6d0f52bf6a","intro":" This is a simple mock question","url":"Mock-Stub-Post","i_words":6,"i_uid":3,"username":"user1","ulink":"<a href=\"\/users\/3\/user1\">user1<\/a>","avtr":"http:\/\/127.0.0.5:88\/w\/img\/avatar\/sqr\/3.jpg","i_up":0,"i_down":0,"i_votes":0,"i_favs":0,"i_views":0,"a_tags":["mock","stub","tag"],"a_title":["mock","stub","post"],"status":"answrd","tags_html":"<a href=\"\/tagged\/mock\/\" title=\"Questions tagged \'mock\'\">mock<\/a> <a href=\"\/tagged\/stub\/\" title=\"Questions tagged \'stub\'\">stub<\/a> <a href=\"\/tagged\/tag\/\" title=\"Questions tagged \'tag\'\">tag<\/a> ","credits":"","i_ts":1305395213,"hts":"May 14, 2011 12:46 pm CDT","i_lm_ts":1305401334,"i_ans":1,"ans_s":"","v_s":"s","f_s":"s","ip":"127.0.0.1","app":"web","i_flwrs":1,"cc":null,"cn":null,"reg":null,"city":null,"zip":null,"lat":null,"lon":null,"a_flwrs":[3],"sim_q":"<div id=\"sim_questions\" class=\"similars\"><div class=\"simq\"><a href=\"\/q449\/another-attempt-to-post-in-tag\" title=\" what if this was a link nana taggylike so: http:\/\/www.lenta.comnothing? My stuff and stuffWhat is I paste it like &nbsp;and so:\u2026\">another attempt to post + in tag<\/a><br><span class=\"ts\" title=\"April 9, 2011\">April 9, 2011<\/span><br><\/div><div class=\"simq\"><a href=\"\/q40\/Testing-banned-ip-post\" title=\" Can I post from banned IP? Maybe?\">Testing of banned ip post<\/a><br><span class=\"ts\" title=\"\"><\/span><br><\/div><div class=\"simq\"><a href=\"\/q437\/my-new-test-post-links\" title=\" what if this was a link like so: http:\/\/www.lenta.com nothing? What is I paste it like &nbsp;and so:\u2026\">my new test post links<\/a><br><span class=\"ts\" title=\"April 8, 2011\">April 8, 2011<\/span><br><\/div><div class=\"simq\"><a href=\"\/q417\/test-post-with-new-TagIndexer-and-stuff\" title=\" new tag indexer test here and tokenizer test\">test post with new TagIndexer and stuff<\/a><br><span class=\"ts\" title=\"April 4, 2011\">April 4, 2011<\/span><br><\/div><div class=\"simq\"><a href=\"\/q330\/test-follow-by-email-on-user-post\" title=\" A test of question here gggh nute g ny nuts hh dada l nana hh\">test of follow by email on user post<\/a><br><span class=\"ts\" title=\"March 24, 2011\">March 24, 2011<\/span><br><\/div><div class=\"simq\"><a href=\"\/q85\/and-yet-another-test-post-to-test-indexer\" title=\" test of indexer stuff again G\">and yet another test post to test indexer<\/a><br><span class=\"ts\" title=\"March 6, 2011\">March 6, 2011<\/span><br><\/div><\/div>","a_comments":[{"_id":511,"b":"First comment","username":"user1","i_uid":3,"i_prnt":0,"ts":"Sat, 14 May 2011 14:28:05 -0500","t":"May 14 \'11 at 14:28","avtr":"http:\/\/127.0.0.5:88\/w\/img\/avatar\/sqr\/3.jpg","b_owner":true},{"_id":512,"b":"Second comment","username":"user1","i_uid":3,"i_prnt":0,"ts":"Sat, 14 May 2011 14:28:15 -0500","t":"May 14 \'11 at 14:28","avtr":"http:\/\/127.0.0.5:88\/w\/img\/avatar\/sqr\/3.jpg","b_owner":true}],"i_comments":3,"a_uids":[3,3,3],"i_etag":1305401334,"lp_u":"<a href=\"\/users\/3\/user1\">user1<\/a>","lp_t":"May 14, 2011 2:28 pm CDT"}';

	public function __construct(Registry $Registry, array $a = null){

		/**
		 * 3 Lines below to change the database
		 * that's going to be used to the test database
		 *
		 * This in theory is not necessary because boostrap.php
		 * is used in all tests and it defines MONGO_DBNAME as LAMPCMS_TEST
		 * but this is just an extra precaution
		 */
		$aMongo = $Registry->Ini->getSection('MONGO');
		$aMongo['db'] = 'LAMPCMS_TEST';
		$Registry->Ini->setSection('MONGO', $aMongo);

		$a = \json_decode($this->JSON_ENCODED, true);
		parent::__construct($Registry, $a);
	}
	
}
