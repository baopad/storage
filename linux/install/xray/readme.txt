#程序文件
/usr/local/bin/
clash

#配置目录
/usr/local/etc/clash/
config.json

#共享目录
/usr/local/share/clash/
geoip.dat geosite.dat

#注册系统文件
/etc/systemd/system/
clash.service

rm /usr/local/bin/clash

wget -cP /usr/local/bin/ https://storage.paotung.org/linux/install/clash/clash
wget -cP /usr/local/etc/clash/ https://storage.paotung.org/linux/install/clash/config.yaml
wget -cP /usr/local/share/clash/ https://storage.paotung.org/linux/install/clash/geoip.dat
wget -cP /usr/local/share/clash/ https://storage.paotung.org/linux/install/clash/geosite.dat
wget -cP /etc/systemd/system/ https://storage.paotung.org/linux/install/clash/clash.service
wget -cP /etc/systemd/system/ https://storage.paotung.org/linux/install/clash/clash@.service


mkdir -p /var/log/clash
chmod -R 755 /var/log/clash
chmod 755 /usr/local/bin/clash
systemctl enable clash


cat > /usr/local/etc/clash/./config.json <<EOF
{
    "inbounds": [
        {
            "listen": "127.0.0.1",
            "port": 8080,
            "protocol": "vmess",
            "settings": {
                "clients": [
                    {
                        "id": "07246655-1b9b-f249-a4f7-5aefd3888888"
                    }
                ]
            },
            "streamSettings": {
                "network": "ws",
                "security": "none"
            }
        },
        {
            "listen": "0.0.0.0",
            "port": 443,
            "protocol": "vless",
            "settings": {
                "clients": [
                    {
                        "id": "07246655-1b9b-f249-a4f7-5aefd3888888",
                        "flow": "xtls-rprx-vision"
                    }
                ],
                "decryption": "none"
            },
            "streamSettings": {
                "network": "tcp",
                "security": "reality",
                "realitySettings": {
                    "dest": "8443",
                    "serverNames": ["snap.cloudns.org","www.snap.cloudns.org"],
                    "privateKey": "cGnBERYTqjCYZMLsk0_xH-ioR5V-GSIHipOgZGcrT18",
                    "publickey": "JGBxyfUHKZYihtDUcZHHP9nYOnE-rGulm94Fag2tsmE",
                    "shortIds": [""]
                }
            }
        }
    ],
    "outbounds": [
        {
            "protocol": "freedom"
        }
    ]
}
EOF
systemctl restart clash
systemctl status clash

systemctl start clash


删除
systemctl disable clash
rm -rf /etc/systemd/system/multi-user.target.wants/clash.service.
rm -rf /usr/local/bin/clash
rm -rf /etc/systemd/system/clash.service
rm -rf /etc/systemd/system/clash@.service
rm -rf /etc/systemd/system/clash.service.d
rm -rf /etc/systemd/system/clash@.service.d
rm -rf /usr/local/share/clash















