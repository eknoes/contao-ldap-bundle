<?php

namespace Refulgent\ContaoLDAPSupportBundle\Legacy\Ldap;

class LdapMemberModel extends LdapPersonModel
{
    protected static $strPrefix          = 'Member';
    protected static $strLocalModel      = '\MemberModel';
    protected static $strLocalGroupModel = '\MemberGroupModel';
    protected static $strLdapModel       = 'Refulgent\ContaoLDAPSupportBundle\Legacy\Ldap\LdapMemberModel';
    protected static $strLdapGroupModel  = 'Refulgent\ContaoLDAPSupportBundle\Legacy\Ldap\LdapMemberGroupModel';
}