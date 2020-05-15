import React, { Component } from 'react';
import { FlatList } from 'react-native';
import { Container, Header, Left, Body, Right, Title, Card, CardItem, Text, Content, H1 } from 'native-base';

export default class HumidityScreen extends Component {
    intervalID;

      state = {
        datah: [],
        datat: []
      }

      componentDidMount() {
        this.getData_humidity();
        this.getData_temp();
    }

    componentWillUnmount() {
        clearTimeout(this.intervalID);
    }

    getData_humidity = () => {
        fetch('https://serre.quentinsavean.fr/api/sensor/dht11/humidity/last/')
            .then(response => response.json())
            .then(datah => {
                this.setState({ datah: datah[0] });
                this.intervalID = setTimeout(this.getData_humidity.bind(this), 3000);
        });
      }

      getData_temp = () => {
        fetch('https://serre.quentinsavean.fr/api/sensor/dht11/temp/last/')
        .then(response => response.json())
        .then(datat => {
            this.setState({ datat: datat[0] });
            this.intervalID = setTimeout(this.getData_temp.bind(this), 3000);
      });
    }
    render() {
        return (
            <Container>
                <Header style={{backgroundColor: "#e84118"}}>
                    <Left/>
                    <Body>
                        <Title>Humidité</Title>
                    </Body>
                    <Right />
                </Header>

                <Content style={{marginTop:10, marginLeft: 10, marginRight: 10}}>
                    <Card>
                        <CardItem header>
                            <Text>Humidité</Text>
                        </CardItem>
                        <CardItem>
                            <Body>
                            <FlatList 
                                data={[this.state.datah]}
                                renderItem={ ({item}) => 
                                <Text>
                                    <H1>{item.humidity}%</H1>
                                </Text>
                            }
                            />
                            </Body>
                        </CardItem>
                    </Card>

                    <Card>
                        <CardItem header>
                            <Text>Température</Text>
                        </CardItem>
                        <CardItem>
                            <Body>
                            <FlatList 
                                data={[this.state.datat]}
                                renderItem={ ({item}) => 
                                <Text>
                                    <H1>{item.temp}°C</H1>
                                </Text>
                                }
                                />
                            </Body>
                        </CardItem>
                    </Card>

                </Content>
                
            </Container>
        )
    }
}
