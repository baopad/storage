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

##########systemctl stop xray若有程序先停止


mkdir -p /usr/local/bin
mkdir -p /usr/local/etc/xray/
mkdir -p /usr/local/share/xray
mkdir -p /var/log/xray
chmod -R 644 /var/log/xray
wget -O /usr/local/bin/xray https://storage.paotung.org/linux/install/xray/xray && chmod +x /usr/local/bin/xray
wget -O /usr/local/etc/xray/config.json https://storage.paotung.org/linux/install/xray/config.json
wget -O /usr/local/share/xray/geoip.dat https://storage.paotung.org/linux/install/xray/geoip.dat
wget -O /usr/local/share/xray/geosite.dat https://storage.paotung.org/linux/install/xray/geosite.dat
wget -O /etc/systemd/system/xray.service https://storage.paotung.org/linux/install/xray/xray.service
wget -O /etc/systemd/system/xray@.service https://storage.paotung.org/linux/install/xray/xray@.service
systemctl daemon-reload
systemctl enable xray



systemctl restart xray
systemctl status xray

systemctl start xray


删除
systemctl disable xray
rm -rf /etc/systemd/system/multi-user.target.wants/xray.service.
rm -rf /usr/local/bin/xray
rm -rf /usr/local/etc/xray
rm -rf /usr/local/share/xray
rm -rf /etc/systemd/system/xray.service
rm -rf /etc/systemd/system/xray@.service
rm -rf /etc/systemd/system/xray.service.d
rm -rf /etc/systemd/system/xray@.service.d
















