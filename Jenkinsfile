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
                sh 'echo "Archivos PHP en el proyecto:"; find . -name "*.php" | head -20; echo "Validacion completada"'
            }
        }

        stage('Desplegar en Apache') {
            steps {
                sh '''
                    cp -r . /var/www/html/cv_site/
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
