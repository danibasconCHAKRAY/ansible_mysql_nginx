# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  config.vm.define :nodo3 do |nodo3|
    nodo3.vm.box = "debian/stretch64"
    nodo3.vm.hostname = "nodo3"
    nodo3.vm.network :private_network, ip: "192.168.26.101", netmask: "255.255.255.0"
    nodo3.vm.provision :shell, 
	    :inline => "apt update ; apt install curl -y"
    nodo3.vm.provision "shell", privileged:false, 
      :inline => "curl https:/github.com/danibasconCHAKRAY.keys >> ~/.ssh/authorized_keys"
  end
 config.vm.define :nodo4 do |nodo4|
    nodo4.vm.box = "debian/stretch64"
    nodo4.vm.hostname = "nodo4"
    nodo4.vm.network :private_network, ip: "192.168.26.102", netmask: "255.255.255.0"
    nodo4.vm.provision :shell, 
	    :inline => "apt update ; apt install curl -y"
    nodo4.vm.provision "shell", privileged:false, 
      :inline => "curl https:/github.com/danibasconCHAKRAY.keys >> ~/.ssh/authorized_keys"
  end
end
