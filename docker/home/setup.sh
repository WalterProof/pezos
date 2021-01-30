mkdir ~/.npm-global \
&& npm install -g npm@latest neovim yarn intelephense prettier @prettier/plugin-php \
&& pip3 install --upgrade pip \
&& pip install neovim powerline-status \
&& sh -c 'curl -fLo ~/.config/nvim/autoload/plug.vim --create-dirs https://raw.githubusercontent.com/junegunn/vim-plug/master/plug.vim' \
&& composer global install \
&& nvim -c ':PlugInstall'
