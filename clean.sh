echo »»»» STOPPING »»»»
docker kill `docker ps -a | grep xssviacss | cut -d' ' -f1`
echo »»»» STOPPED  »»»»
echo ==== REMOVING ====
docker rm `docker ps -a | grep xssviacss | cut -d' ' -f1`
echo ==== REMOVED  ====
echo «««« PRUNING  ««««
docker system prune -a
echo ««««  PRUNED  ««««