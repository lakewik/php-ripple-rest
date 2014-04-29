<?php

abstract class RippleRestObject {
    protected static function _toString($x) { if(is_null($x)) return null; return (string) $x; }
    protected static function _fromString($x) { if(is_null($x)) return null; return (string) $x; }
    protected static function _checkString($x) { if(is_null($x)) return true; return true; }
    
    protected static function _toStringPattern($x, $pattern) { if(is_null($x)) return null; return (string) $x; }
    protected static function _fromStringPattern($x, $pattern) { if(is_null($x)) return null; return (string) $x; }
    protected static function _checkStringPattern($x, $pattern) { if(is_null($x)) return true; return (bool) preg_match((string) $x, '`' . $pattern .'`'); }
    
    protected static function _toBoolean($x) { if(is_null($x)) return null; return (boolean) $x; }
    protected static function _fromBoolean($x) { if(is_null($x)) return null; return (boolean) $x; }
    protected static function _checkBoolean($x) { if(is_null($x)) return true; return true; }
    
    protected static function _toFloat($x) { if(is_null($x)) return null; return (float) $x; }
    protected static function _fromFloat($x) { if(is_null($x)) return null; return (float) $x; }
    protected static function _checkFloat($x) { if(is_null($x)) return true; return true; }

    protected static function _toHash256($x) { if(is_null($x)) return null; return self::_toStringPattern($x, "^$|^[A-Fa-f0-9]{64}$"); }
    protected static function _fromHash256($x) { if(is_null($x)) return null; return self::_fromStringPattern($x, "^$|^[A-Fa-f0-9]{64}$"); }
    protected static function _checkHash256($x) { if(is_null($x)) return true; return self::_checkStringPattern($x, "^$|^[A-Fa-f0-9]{64}$"); }
    
    protected static function _toHash128($x) { if(is_null($x)) return null; return self::_toStringPattern($x, "^$|^[A-Fa-f0-9]{32}$"); }
    protected static function _fromHash128($x) { if(is_null($x)) return null; return self::_fromStringPattern($x, "^$|^[A-Fa-f0-9]{32}$"); }
    protected static function _checkHash128($x) { if(is_null($x)) return true; return self::_checkStringPattern($x, "^$|^[A-Fa-f0-9]{32}$"); }
    
    protected static function _toTimestamp($x) { if(is_null($x)) return null; return self::_toStringPattern($x, "^$|^[0-9]{4}-[0-1][0-9]-[0-3][0-9]T(2[0-3]|[01][0-9]):[0-5][0-9]:[0-5][0-9](Z|[+](2[0-3]|[01][0-9]):[0-5][0-9])$"); }
    protected static function _fromTimestamp($x) { if(is_null($x)) return null; return self::_fromStringPattern($x, "^$|^[0-9]{4}-[0-1][0-9]-[0-3][0-9]T(2[0-3]|[01][0-9]):[0-5][0-9]:[0-5][0-9](Z|[+](2[0-3]|[01][0-9]):[0-5][0-9])$"); }
    protected static function _checkTimestamp($x) { if(is_null($x)) return true; return self::_checkStringPattern($x, "^$|^[0-9]{4}-[0-1][0-9]-[0-3][0-9]T(2[0-3]|[01][0-9]):[0-5][0-9]:[0-5][0-9](Z|[+](2[0-3]|[01][0-9]):[0-5][0-9])$"); }
    
    protected static function _toRippleAddress($x) { if(is_null($x)) return null; return self::_toStringPattern($x, "^r[1-9A-HJ-NP-Za-km-z]{25,33}$"); }
    protected static function _fromRippleAddress($x) { if(is_null($x)) return null; return self::_fromStringPattern($x, "^r[1-9A-HJ-NP-Za-km-z]{25,33}$"); }
    protected static function _checkRippleAddress($x) { if(is_null($x)) return true; return self::_checkStringPattern($x, "^r[1-9A-HJ-NP-Za-km-z]{25,33}$"); }
    
    protected static function _toResourceId($x) { if(is_null($x)) return null; return self::_toStringPattern($x, "^(?!$|^[A-Fa-f0-9]{64})[ -~]{1,255}$"); }
    protected static function _fromResourceId($x) { if(is_null($x)) return null; return self::_fromStringPattern($x, "^(?!$|^[A-Fa-f0-9]{64})[ -~]{1,255}$"); }
    protected static function _checkResourceId($x) { if(is_null($x)) return true; return self::_checkStringPattern($x, "^(?!$|^[A-Fa-f0-9]{64})[ -~]{1,255}$"); }
    
    protected static function _toFloatString($x) { if(is_null($x)) return null; return self::_toStringPattern($x, "^[-+]?[0-9]*[.]?[0-9]+([eE][-+]?[0-9]+)?$"); }
    protected static function _fromFloatString($x) { if(is_null($x)) return null; return self::_fromStringPattern($x, "^[-+]?[0-9]*[.]?[0-9]+([eE][-+]?[0-9]+)?$"); }
    protected static function _checkFloatString($x) { if(is_null($x)) return true; return self::_checkStringPattern($x, "^[-+]?[0-9]*[.]?[0-9]+([eE][-+]?[0-9]+)?$"); }
    
    protected static function _toURL($x) { if(is_null($x)) return null; return self::_toStringPattern($x, "^(ftp://|http://|https://)?([A-Za-z0-9_]+:{0,1}[A-Za-z0-9_]*@)?(^([ \t\r\n\f])+)(:[0-9]+)?(/|/([[A-Za-z0-9_]#!:.?+=&%@!-/]))?$"); }
    protected static function _fromURL($x) { if(is_null($x)) return null; return self::_fromStringPattern($x, "^(ftp://|http://|https://)?([A-Za-z0-9_]+:{0,1}[A-Za-z0-9_]*@)?(^([ \t\r\n\f])+)(:[0-9]+)?(/|/([[A-Za-z0-9_]#!:.?+=&%@!-/]))?$"); }
    protected static function _checkURL($x) { if(is_null($x)) return true; return self::_checkStringPattern($x, "^(ftp://|http://|https://)?([A-Za-z0-9_]+:{0,1}[A-Za-z0-9_]*@)?(^([ \t\r\n\f])+)(:[0-9]+)?(/|/([[A-Za-z0-9_]#!:.?+=&%@!-/]))?$"); }
    
    protected static function _toCurrency($x) { if(is_null($x)) return null; return self::_toStringPattern($x, "^([a-zA-Z0-9]{3}|[A-Fa-f0-9]{40})$"); }
    protected static function _fromCurrency($x) { if(is_null($x)) return null; return self::_fromStringPattern($x, "^([a-zA-Z0-9]{3}|[A-Fa-f0-9]{40})$"); }
    protected static function _checkCurrency($x) { if(is_null($x)) return true; return self::_checkStringPattern($x, "^([a-zA-Z0-9]{3}|[A-Fa-f0-9]{40})$"); }
    
    protected static function _toUINT32($x) { if(is_null($x)) return null; return self::_toStringPattern($x, "^$|^(429496729[0-5]|42949672[0-8][0-9]|4294967[01][0-9]{2}|429496[0-6][0-9]{3}|42949[0-5][0-9]{4}|4294[0-8][0-9]{5}|429[0-3][0-9]{6}|42[0-8][0-9]{7}|4[01][0-9]{8}|[1-3][0-9]{9}|[1-9][0-9]{8}|[1-9][0-9]{7}|[1-9][0-9]{6}|[1-9][0-9]{5}|[1-9][0-9]{4}|[1-9][0-9]{3}|[1-9][0-9]{2}|[1-9][0-9]|[0-9])$"); }
    protected static function _fromUINT32($x) { if(is_null($x)) return null; return self::_fromStringPattern($x, "^$|^(429496729[0-5]|42949672[0-8][0-9]|4294967[01][0-9]{2}|429496[0-6][0-9]{3}|42949[0-5][0-9]{4}|4294[0-8][0-9]{5}|429[0-3][0-9]{6}|42[0-8][0-9]{7}|4[01][0-9]{8}|[1-3][0-9]{9}|[1-9][0-9]{8}|[1-9][0-9]{7}|[1-9][0-9]{6}|[1-9][0-9]{5}|[1-9][0-9]{4}|[1-9][0-9]{3}|[1-9][0-9]{2}|[1-9][0-9]|[0-9])$"); }
    protected static function _checkUINT32($x) { if(is_null($x)) return true; return self::_checkStringPattern($x, "^$|^(429496729[0-5]|42949672[0-8][0-9]|4294967[01][0-9]{2}|429496[0-6][0-9]{3}|42949[0-5][0-9]{4}|4294[0-8][0-9]{5}|429[0-3][0-9]{6}|42[0-8][0-9]{7}|4[01][0-9]{8}|[1-3][0-9]{9}|[1-9][0-9]{8}|[1-9][0-9]{7}|[1-9][0-9]{6}|[1-9][0-9]{5}|[1-9][0-9]{4}|[1-9][0-9]{3}|[1-9][0-9]{2}|[1-9][0-9]|[0-9])$"); }
    
    protected static function _toNotification($x) { if(is_null($x)) return null; return $x->toArray(); }
    protected static function _fromNotification($x) { if(is_null($x)) return null; return ($x instanceof RippleRestNotification) ? $x : new RippleRestNotification($x); }
    protected static function _checkNotification($x) { if(is_null($x)) return true; return ($x instanceof RippleRestNotification); }
    
    protected static function _toOrder($x) { if(is_null($x)) return null; return $x->toArray(); }
    protected static function _fromOrder($x) { if(is_null($x)) return null; return ($x instanceof RippleRestOrder) ? $x : new RippleRestOrder($x); }
    protected static function _checkOrder($x) { if(is_null($x)) return true; return ($x instanceof RippleRestOrder); }
    
    protected static function _toAccountSettings($x) { if(is_null($x)) return null; return $x->toArray(); }
    protected static function _fromAccountSettings($x) { if(is_null($x)) return null; return ($x instanceof RippleRestAccountSettings) ? $x : new RippleRestAccountSettings($x); }
    protected static function _checkAccountSettings($x) { if(is_null($x)) return true; return ($x instanceof RippleRestAccountSettings); }
    
    protected static function _toPayment($x) { if(is_null($x)) return null; return $x->toArray(); }
    protected static function _fromPayment($x) { if(is_null($x)) return null; return ($x instanceof RippleRestPayment) ? $x : new RippleRestPayment($x); }
    protected static function _checkPayment($x) { if(is_null($x)) return true; return ($x instanceof RippleRestPayment); }
    
    protected static function _toBalance($x) { if(is_null($x)) return null; return $x->toArray(); }
    protected static function _fromBalance($x) { if(is_null($x)) return null; return ($x instanceof RippleRestBalance) ? $x : new RippleRestBalance($x); }
    protected static function _checkBalance($x) { if(is_null($x)) return true; return ($x instanceof RippleRestBalance); }
    
    protected static function _toAmount($x) { if(is_null($x)) return null; return $x->toArray(); }
    protected static function _fromAmount($x) { if(is_null($x)) return null; return ($x instanceof RippleRestAmount) ? $x : new RippleRestAmount($x); }
    protected static function _checkAmount($x) { if(is_null($x)) return true; return ($x instanceof RippleRestAmount); }
    
    protected static function _toTrustline($x) { if(is_null($x)) return null; return $x->toArray(); }
    protected static function _fromTrustline($x) { if(is_null($x)) return null; return ($x instanceof RippleRestTrustline) ? $x : new RippleRestTrustline($x); }
    protected static function _checkTrustline($x) { if(is_null($x)) return true; return ($x instanceof RippleRestTrustline); }
    
    protected static function _toArrayAmount($x) { if(is_null($x)) return null; return array_map(function($y) { return self::_toAmount($y); }, $x); }
    protected static function _fromArrayAmount($x) { if(is_null($x)) return null; return array_map(function($y) { return self::_fromAmount($y); }, $x); }
    protected static function _checkArrayAmount($x) { if(is_null($x)) return true; return is_array($x) && count(array_filter($x, function($y) { return !self::_checkAmount($y); })) == 0; }
    
}