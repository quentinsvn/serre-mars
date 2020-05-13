import React, { Component } from 'react';
import { StyleSheet, Linking  } from 'react-native';
import { Container, Header, Content, Button, ListItem, Text, Icon, Left, Body, Right, Switch, Title, Separator } from 'native-base';


export default class AboutScreen extends Component {
    render() {
        return (
        <Container>
            <Header style={{backgroundColor: "#e84118"}}>
                <Left/>
                <Body>
                    <Title>À propos</Title>
                </Body>
                <Right />
            </Header>
            <Content>
                <Separator style={styles.container} bordered>
                    <Text style={{fontSize: 15}}>RESSOURCES</Text>
                </Separator>
                <ListItem icon onPress={ ()=>{ Linking.openURL('https://serre.quentinsavean.fr/resources/')}}>
                    <Right></Right>
                    <Body>
                        <Text>Cahier des charges</Text>
                    </Body>   
                    <Left>
                        <Icon active name="arrow-forward" />
                    </Left>
                </ListItem>
                <ListItem icon onPress={ ()=>{ Linking.openURL('https://serre.quentinsavean.fr/resources/diagrams.php')}}>
                    <Right></Right>
                    <Body>
                        <Text>Diagrammes</Text>
                    </Body>   
                    <Left>
                        <Icon active name="arrow-forward" />
                    </Left>
                </ListItem>
                <ListItem icon onPress={ ()=>{ Linking.openURL('https://serre.quentinsavean.fr/resources/sketch.php')}}>
                    <Right></Right>
                    <Body>
                        <Text>Croquis</Text>
                    </Body>   
                    <Left>
                        <Icon active name="arrow-forward" />
                    </Left>
                </ListItem>
                <ListItem icon onPress={ ()=>{ Linking.openURL('https://serre.quentinsavean.fr/videos/')}}>
                    <Right></Right>
                    <Body>
                        <Text>Vidéos</Text>
                    </Body>   
                    <Left>
                        <Icon active name="arrow-forward" />
                    </Left>
                </ListItem>
                <ListItem icon onPress={ ()=>{ Linking.openURL('https://serre.quentinsavean.fr/resources/programs.php')}}>
                    <Right></Right>
                    <Body>
                        <Text>Programmes</Text>
                    </Body>   
                    <Left>
                        <Icon active name="arrow-forward" />
                    </Left>
                </ListItem>
                <ListItem icon onPress={ ()=>{ Linking.openURL('https://serre.quentinsavean.fr/resources/mentions.php')}}>
                    <Right></Right>
                    <Body>
                        <Text>Mentions</Text>
                    </Body>   
                    <Left>
                        <Icon active name="arrow-forward" />
                    </Left>
                </ListItem>
                <Separator style={styles.container} bordered>
                    <Text style={{fontSize: 15}}>DÉVELOPPEMENT</Text>
                </Separator>
                <ListItem icon onPress={ ()=>{ Linking.openURL('https://serre.quentinsavean.fr/api/')}}>
                    <Right></Right>
                    <Body>
                        <Text>API</Text>
                    </Body>   
                    <Left>
                        <Icon active name="arrow-forward" />
                    </Left>
                </ListItem>
                <ListItem icon onPress={ ()=>{ Linking.openURL('https://github.com/quenquen147/serre-mars')}}>
                    <Right></Right>
                    <Body>
                        <Text>Consulter sur GitHub</Text>
                    </Body>   
                    <Left>
                        <Icon active name="arrow-forward" />
                    </Left>
                </ListItem>
            </Content>
        </Container>
        )
    }
}


const styles = StyleSheet.create({
    container: {
      paddingTop: 30,
      paddingBottom: 20
    },
  });
