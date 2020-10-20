
# Playbooks end 2 end (ubuntu)

[x] LEMP with containers
[ ] Python3 + Postgres
[ ] Dotnet + Postgrrs
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
ansible-galaxy install ome.postgresql_client

---Draft
sudo docker cp ./php-app/* php:/var/www/app/

git subtree add --prefix roles/pg  https://github.com/ome/ansible-role-postgresql.git  master --squash

git subtree add --prefix roles/dotnet  https://github.com/ocha/ansible-role-dotnet-core.git  master --squash