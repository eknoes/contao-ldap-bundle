<?php

namespace HeimrichHannot\Ldap\Backend;

class LdapUser extends LdapPerson
{
    protected static $blnUserMode        = true;
    protected static $strPrefix          = 'User';
    protected static $strLocalModel      = '\UserModel';
    protected static $strLocalGroupModel = '\UserGroupModel';
    protected static $strLdapModel       = 'HeimrichHannot\Ldap\LdapUserModel';
    protected static $strLdapGroupModel  = 'HeimrichHannot\Ldap\LdapUserGroupModel';
}