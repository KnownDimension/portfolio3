let
  pkgs = import <nixpkgs> {};
in pkgs.mkShell {
  packages = with pkgs; [
    php82
    mysql84
    php82Packages.composer
    php84Extensions.pdo
    php84Extensions.pdo_mysql
    nodejs
    mycli
  ];





# used to setup php essential packages and composer so that my system isnt polluted
# yes i use linux btw, and yes i use nixos