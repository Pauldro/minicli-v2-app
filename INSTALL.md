# Installation Instructions

## 1. Edit /etc/php.d/*apcu.ini

Add / edit the following ini values:

```ini
apc.enable_cli=1

apc.shm_size=2048M

apc.gc_ttl=3600
```
