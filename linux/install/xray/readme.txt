#程序文件
/usr/local/bin/
xray

#配置目录
/usr/local/etc/xray/
config.json

#共享目录
/usr/local/share/xray/
geoip.dat geosite.dat

#注册系统文件
/etc/systemd/system/
xray.service

rm /usr/local/bin/xray

wget -cP /usr/local/bin/ https://storage.paotung.org/linux/install/xray/xray
wget -cP /usr/local/etc/xray/ https://storage.paotung.org/linux/install/xray/config.json
wget -cP /usr/local/share/xray/ https://storage.paotung.org/linux/install/xray/geoip.dat
wget -cP /usr/local/share/xray/ https://storage.paotung.org/linux/install/xray/geosite.dat
wget -cP /etc/systemd/system/ https://storage.paotung.org/linux/install/xray/xray.service
wget -cP /etc/systemd/system/ https://storage.paotung.org/linux/install/xray/xray@.service