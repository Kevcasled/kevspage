pipeline {
    agent any

    stages {
        stage('Descargar código') {
            steps {
                checkout scm
            }
        }

        stage('Validar PHP') {
            steps {
                sh '''
                    if find . -name "*.php" | grep -q .; then
                        find . -name "*.php" -exec php -l {} \;
                    else
                        echo "No hay ficheros PHP — validación omitida"
                    fi
                '''
            }
        }

        stage('Desplegar en Apache') {
            steps {
                sh '''
                    sudo mkdir -p /var/www/html/cv_site
                    sudo cp -r * /var/www/html/cv_site/
                    sudo systemctl reload apache2
                '''
            }
        }
    }

    post {
        success {
            echo 'Pipeline completado correctamente'
        }
        failure {
            echo 'Pipeline fallido'
        }
    }
}
