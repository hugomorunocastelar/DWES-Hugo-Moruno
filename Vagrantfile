Vagrant.configure("2") do |config|
  config.vm.box = "generic/debian12"
  config.vm.network "forwarded_port", guest: 8081, host: 3306
  config.vm.provision "shell", path: "provision.sh"
  config.vm.synced_folder ".", "/vagrant"
  # config.vm.box_check_update = false
  # config.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.0.0.1"
  # config.vm.network "private_network", ip: "192.168.33.10"
  # config.vm.network "public_network"
  # config.vm.synced_folder "../data", "/vagrant_data"
end
