pipeline {
    agent any

    stages {
        stage('Descargar codigo') {
            steps {
                git branch: 'main',
                    url: 'https://github.com/rovalemi/cv-devops.git'
            }
        }

        stage('Validar PHP') {
            steps {
                sh '''
                    find . -name "*.php" | while read f; do
                        php -l "$f" || exit 1
                    done
                    echo "Todos los archivos PHP son validos"
                '''
            }
        }

        stage('Desplegar en Apache') {
            steps {
                sh '''
                    sudo cp -r . /var/www/html/cv_site/
                    sudo chown -R www-data:www-data /var/www/html/cv_site/
                    sudo systemctl reload apache2
                    echo "Desplegado correctamente"
                '''
            }
        }
    }

    post {
        success {
            echo 'Pipeline completado con exito'
        }
        failure {
            echo 'El pipeline ha fallado'
        }
    }
}
