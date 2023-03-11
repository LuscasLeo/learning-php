PHP Build requirements:

```sh
git config --global user.name anyuser;
git config --global user.email anymail;
git clone https://github.com/asdf-vm/asdf.git ~/.asdf --branch v0.11.2;
echo $'. "$HOME/.asdf/asdf.sh"' >> ~/.bashrc && . $HOME/.asdf/asdf.sh;
echo $'. "\$HOME/.asdf/completions/asdf.bash"' >> ~/.bashrc && . "$HOME/.asdf/completions/asdf.bash";
sudo apt-get update && sudo apt-get install -y build-essential autoconf libtool bison re2c pkg-config libxml2-dev libsqlite3-dev libgd-dev libonig-dev libpq-dev libreadline-dev libzip-dev;
asdf plugin-add php;
asdf install php 8.1.1;
asdf global php 8.1.1;
```