#!groovy

        stage 'Dev'
        node {
        checkout scm
        ant 'clean'
        }

        stage 'QA'
        node{
        ant 'lint'
        ant 'phpunit'
        ant 'static-analysis'
        }


        stage name: 'Staging', concurrency: 1
        node {
        deploy 'staging'
        }

        if(env.BRANCH_NAME=='master'){

        input message: "Does staging look good?"
        try {
        checkpoint('Before production')
        } catch (NoSuchMethodError _) {
        echo 'Checkpoint feature available in CloudBees Jenkins Enterprise.'
        }

        stage name: 'Documentation'
        node {
        ant 'phpdox'
        publishHTML(target : [allowMissing: false, alwaysLinkToLastBuild: false, keepAll: true, reportDir: 'build/api', reportFiles: 'index.html', reportName: 'Api Documentation'])
        }

        stage name: 'Production', concurrency: 1
        node {
        echo 'Production server looks to be alive'
        deploy 'production'
        echo "Deployed to production"
        }

        }

        stage name : 'Notify'
        node {
        echo 'hello world'
        }

        def mvn(args) {
        //sh "${tool 'Maven 3.x'}/bin/mvn ${args}"
        }

        def ant(args) {
        sh "${tool 'ant197'}/bin/ant ${args}"
        }

        def runTests(duration) {
        node {
        sh "sleep ${duration}"
        }
        }

        def deploy(id) {
        //unstash 'war'
        //sh "cp x.war /tmp/${id}.war"
        }

        def undeploy(id) {
        //sh "rm /tmp/${id}.war"
        }