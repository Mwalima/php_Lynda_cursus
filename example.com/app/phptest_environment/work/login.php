<?php
/**
 * Created by IntelliJ IDEA.
 * User: stplus
 * Date: 4-11-2016
 * Time: 13:55
 */


$username ='erwinouder@studentsplus.nl';
$password ="0f9e99dd491563e49dcdacffeba443b1cbc79d8d";
$cfg['security']['pepper']="65d35db129ca3dc181db95b6d43f8d47";
$logincode_timestamp = "1478260338";
$id='180948';

$a = md5($username.$password.$cfg['security']['pepper'].$logincode_timestamp).$id;

//echo $a;

//echo time();
time() - $timestamp > SP_SECONDS_PERIOD_WEEK && $this->confirmed == 1;


////private function _login($username, $password, $logincode) {
//    global $session, $cfg, $country, $language, $cycle;
//    $page = $cycle->getPage();
//    $password_in = $password;
//    if (MODE == 'frontend' && $username == '' && $password == '' && $logincode == '') {
//        // Empty username and password only at the frontend!
//        $query = 'SELECT * FROM rps_users WHERE id = 1';
//        $params = null;
//    } elseif ($logincode != '') {
//        // Logincode
//        $logincode_hash = substr($logincode,0,32);
//        $logincode_id   = intval(substr($logincode, 32));
//        if($logincode_id > 0) { // first md5 hash check can go after 4 months
//            $query = 'SELECT u.* FROM rps_users u LEFT JOIN rps_sessions s ON u.id = s.user_id WHERE (u.id = ? AND md5(concat(u.username, u.password)) = ?) OR
//                          (md5(concat(u.username, u.password,?, logincode_timestamp)) = ? AND u.id = ? AND
//                          ( (SELECT count(user_id) from rps_usergroupusers ugu where ugu.user_id= ? and (ugu.usergroup_id in (31,33) OR (ugu.usergroup_id in (32) AND (select count(id) from dbd_taken t where t.type in (3,14) and t.user_id=u.id)=0)))>0
//                          OR  ? > (UNIX_TIMESTAMP()-logincode_timestamp) ))';//31 bijlesnemer, 33 begeleider. 32 bijlesgever, is alleen prospect als er nog geen upload bestanden- of inschrijvingscontrole-taak is
//            $params = [$logincode_id, $logincode_hash, $cfg['security']['pepper'],$logincode_hash, $logincode_id,$logincode_id,SP_SECONDS_PERIOD_WEEK];
//        } else {
//            $query = 'SELECT u.* FROM rps_users u LEFT JOIN rps_sessions s ON u.id = s.user_id WHERE (md5(concat(u.username, u.password)) = ?) OR
//                          (md5(concat(u.username, u.password,?, logincode_timestamp)) = ? AND
//                          ( (SELECT count(user_id) from rps_usergroupusers ugu where ugu.user_id= u.id and (ugu.usergroup_id in (31,33) OR (ugu.usergroup_id in (32) AND (select count(id) from dbd_taken t where t.type in (3,14) and t.user_id=u.id)=0)))>0
//                          OR ? > (UNIX_TIMESTAMP()-logincode_timestamp) ))';
//            $params = [$logincode_hash,$cfg['security']['pepper'],$logincode_hash, SP_SECONDS_PERIOD_WEEK];
//        }
//    } else {
//        $password = preg_replace('/\s+/u', '', $password);
//        $query = 'SELECT u.* FROM rps_users u WHERE u.username = ? AND u.password = SHA1(CONCAT(?, u.dynamic_salt)) AND u.id > 1';
//        $params = [trim($username), trim($cfg['security']['pepper'] . $password)];
//    }
//
//    //echo SP_DBMS::show($query, $params);
//    // Create user object & Execute query
//    //echo
//    $user = lib_load_user();
//    $user->query($query, $params);
//    // Anonieme gebruiker moet het merk van de Website meekrijgen.
//    if($user->id == 1) {
//        if($page != null)
//        {
//            $user->merk_id = $page->getMerkId();
//        } else {
//            // failsafe
//            $user->merk_id = SP_MERK_ID;
//        }
//    }
//
//    if($username && $password_in && $user->id <= 1){
//        SecurityModule::updateFailedLogins(null, $username, $password_in);
//    }
//
//    // when conflicting roles, user has to choose
//    $conflicting_roles = RoleConflictFunctions::getConflictingRoles($user);
//
//    if ($user->isBijlesgever()) {
//        $user = $user->getThisAsBijlesgever();
//    } elseif ($user->isBijlesnemer() || $user->isInactiveBijlesnemer()) {
//        $user = $user->getThisAsBijlesnemer();
//    }
//    if($user->id>1) {
//        /**
//         * @var Bijlesgever $user;
//         */
//        $user->clearLogincode();
//    }
//
//    $user->__has_conflicting_roles =    $conflicting_roles['has_conflict'];
//    $user->__conflicting_roles =        $conflicting_roles['conflicting_roles'];
//    $user->__conflicting_role_chosen =  0;
//
//    if (!isset($cfg['security']['max_login_tries'])) {
//        $cfg['security']['max_login_tries'] = 0;
//    }
//
//    //Login tries
//    $login_tries = SecurityModule::getFailedLogins($user->id);
//
//    // Useraccount is found!
//    if (
//        intval($user->id) > 0 &&
//        (
//            $user->expiration == null ||
//            $user->expiration == null ||
//            $user->expiration > date('Y-m-d')
//        ) &&
//        (
//            intval($cfg['security']['max_login_tries']) == 0 ||
//            $login_tries < intval($cfg['security']['max_login_tries'])
//        ) &&
//        ( MODE == 'backend' || !FileFuntions::inMaintenanceMode() || $user->id == 1)
//    )
//    {
//        $login_allowed = $user->checkLoginAllowed();
//        if($user->id == 1 || $login_allowed[MODE])
//        {
//            // Regenerate SessionID
//            if (!(isset($cfg['PHPUNIT_ACTIVE']) && $cfg['PHPUNIT_ACTIVE'])) {
//                session_regenerate_id(true);
//            }
//            $session->setSessionID(session_id());
//
//            //set the verification code for the email
//            if (isset($_REQUEST['ecode'])) {
//                $session->setAttribute('ecode', $_REQUEST['ecode']);
//            }
//
//            // Get ID & IP
//            $id = $user->id;
//            $ip = $session->getUserIP();
//
//            // Create session
//            $session->setUser($user);
//            $session->setIP($ip);
//
//            // Remember this last login
//            if (intval($cfg['security']['max_login_tries']) > 0) {
//                $query = 'UPDATE rps_users SET failed_logins = 0, last_login = now(), last_login_ip = ? WHERE id = ?';
//
//                //Reset login tries counter
//                SecurityModule::resetFailedLogins($user->id);
//            } else {
//                $query = 'UPDATE rps_users SET last_login = now(), last_login_ip = ? WHERE id = ?';
//            }
//            // allow while in maintenance mode
//            $mysql_result = null;
//            queryPDO($query, [$ip, $id]);
//
//            /* reset niet reagerend */
//            if(isset($_COOKIE['rps_backend_sessionid']) == false && $user->id && get_class($user) == 'Bijlesgever' && $user->isBijlesgever() && $user->isNietReagerend()){
//                //can't use $user->resetNietReagerend() here, because $cycle might not exist yet..
//                queryPDO('update dbd_inschrijvingen_bijlesgevers set niet_reagerend = 0 where user_id = ?', [$user->id]);
//                $user->niet_reagerend = 0;
//            }
//            // Activate session
//            $session->activate();
//
//            // Reset error
//            $session->resetError();
//
//            // keep track of frontend user agents
//            if(MODE == 'frontend')
//            {
//                if($session->user->id > 1)
//                {
//                    $user_agent = 'unknown';
//                    if(array_key_exists('HTTP_USER_AGENT', $_SERVER))
//                    {
//                        $user_agent = $_SERVER['HTTP_USER_AGENT'];
//                    }
//                    queryPDO('INSERT INTO rps_users_url_user_agents (user_id, user_agent, login_date) VALUES (?, ?, ?)', [$session->user->id, $user_agent, date('Y-m-d H:i:s')]);
//                }
//            }
//
//            if ($user->language != '') {
//                $language = $user->language;
//                SecurityModule::addCookie('language', $language);
//                $usermerk = Merk::getInstance(SP_MERK_ID);
//                $country = $usermerk->getLand()->code;
//                SecurityModule::addCookie('country', $country);
//            }
//
//            return true;
//        } else {
//            // Deactivate session
//            $session->setUser(null);
//            $session->deactivate();
//            // Set error
//            $session->setError('INACTIVE');
//
//            //Update failed logins
//            SecurityModule::updateFailedLogins($user->id);
//
//            return false;
//        }
//    } else if ($user->id > 0) {
//        // Deactivate session
//        $session->setUser(null);
//        $session->deactivate();
//        // Set error
//        $session->setError('BLOCKED');
//
//        //Update failed logins
//        SecurityModule::updateFailedLogins($user->id);
//
//        return false;
//    } else {
//        // Deactivate session
//        $session->setUser(null);
//        $session->deactivate();
//
//        // Set error
//        if ($logincode != '') {
//            //$session->setError('INVALID_URL');
//            $page_class = new Page();
//            $page_class->redirect($page_class->getURL('./login'), get_defined_vars());
//        } else {
//            $session->setError('WRONG');
//        }
//
//        //Update failed logins
//        $login_tries = SecurityModule::updateFailedLogins(null, $username);
//
//        if (intval($cfg['security']['max_login_tries']) > 0 && $login_tries >= intval($cfg['security']['max_login_tries']) && $username != '') {
//            // Set error
//            $session->setError('BLOCKED');
//        }
//        return false;
//    }
//}