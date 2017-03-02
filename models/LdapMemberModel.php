<?php

namespace HeimrichHannot\Ldap;

class LdapMemberModel extends LdapPersonModel
{
    protected static $blnUserMode        = false;
    protected static $strPrefix          = 'Member';
    protected static $strLocalModel      = '\MemberModel';
    protected static $strLocalGroupModel = '\MemberGroupModel';
    protected static $strLdapModel       = 'HeimrichHannot\Ldap\LdapMemberModel';
    protected static $strLdapGroupModel  = 'HeimrichHannot\Ldap\LdapMemberGroupModel';
}