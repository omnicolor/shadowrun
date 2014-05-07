Vagrant.configure("2") do |config|
    config.vm.box = "debian-wheezy72-x64-vbox43"
    config.vm.box_url = "http://box.puphpet.com/debian-wheezy72-x64-vbox43.box"

    config.vm.define :web do |web|
        web.vm.hostname = "web"
        web.vm.network :forwarded_port, guest: 80, host: 10080
        web.vm.network :private_network, ip: "172.16.2.2"
        web.vm.provision :shell, :path => "vagrant/bootstrap.web.sh"
    end
end
