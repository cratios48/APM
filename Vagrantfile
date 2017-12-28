# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  config.vm.box = "centos/7"
  config.vm.hostname = "apm"
  config.vm.network "private_network", ip: "10.10.10.10"
  config.vm.provider "virtualbox" do |v|
    v.cpus = 1
    v.memory = 512
  end
  config.vm.provision "shell",
    inline: "sudo yum install -y vim
    sudo useradd jjh
    sudo mkdir /home/jjh/.ssh
    sudo cp -r /vagrant/id_rsa.pub /home/jjh/.ssh/authorized_keys
    sudo chown -R jjh:jjh /home/jjh
    sudo echo '%jjh ALL=(ALL) NOPASSWD: ALL' > /etc/sudoers.d/jjh
    "
end
