FROM mcr.microsoft.com/devcontainers/base:jammy

WORKDIR /home/vscode

USER vscode

RUN git config --global user.name anyuser
RUN git config --global user.email anymail
RUN git clone https://github.com/asdf-vm/asdf.git ~/.asdf --branch v0.11.2
RUN sudo apt-get update && sudo apt-get install -y build-essential autoconf libtool bison re2c pkg-config libxml2-dev libsqlite3-dev libgd-dev libonig-dev libpq-dev libreadline-dev libzip-dev
RUN echo '. "$HOME/.asdf/asdf.sh"' >> ~/.bashrc
RUN echo '. "$HOME/.asdf/completions/asdf.bash"' >> ~/.bashrc
RUN export PATH="$HOME/.asdf/bin:$PATH" && asdf plugin-add php && asdf install php 8.1.1 && asdf global php 8.1.1
