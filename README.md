
# Playbooks end 2 end (ubuntu)

[x] LEMP with containers
[ ] Python3 + Postgres
[X] Dotnet + Postgrrs
[ ] JS: Npm, Typescript + Postgres
[ ] Java, Postgres


sudo ansible-playbook "lemp.yml" --extra-vars "container_state=started network_state=present" - Plays the role.
sudo ansible-playbook "lemp.yml" --extra-vars "container_state=absent network_state=absent" - Destoyes the role

Variables for states depending on which network and containers will get stopped, started, removed, paused

netwokd_state =  absent | present
container_state = absent | present | stopped |started.


sudo ansible-playbook "deploy.yml" --extra-vars "container_state=started network_state=present"



# Debug container:

sudo docker logs --tail 50 --follow --timestamps php


# Edit vars

especitally db host, name, etc: roles/vars/main.yaml (check the role used in respective playbook - currently lemp.yml)



# Postgres
before installing

`sudo ansible-galaxy install ome.postgresql_client`

# Python + Postgres
`sudo ansible-playbook py_pg.yml`


---Draft
sudo docker cp ./php-app/* php:/var/www/app/

git subtree add --prefix roles/pg  https://github.com/ome/ansible-role-postgresql.git  master --squash

git subtree add --prefix roles/dotnet  https://github.com/ocha/ansible-role-dotnet-core.git  master --squash


# Nginx

ansible-galaxy install nginxinc.nginx


# Copyright of PG role:

Copyright (c) 2019, University of Dundee
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this
   list of conditions and the following disclaimer.
2. Redistributions in binary form must reproduce the above copyright notice,
   this list of conditions and the following disclaimer in the documentation
   and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR
ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
