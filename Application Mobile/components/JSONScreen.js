import React, { Component } from 'react';
import { View, FlatList, Text } from 'react-native';

export default class Source extends Component {

    constructor() {
        super(); 
        this.state = {
            data: []
        }
    }

    componentDidMount() {
        fetch("https://serre.quentinsavean.fr/api/sensor/dust/pcs/last/")
        .then((result)=>result.json())
        .then((res) => {
            this.setState({ 
                data:res[0]
            })
        })
    }

    render() {
        return (
            <View style={{marginTop: 30}}>
                <FlatList 
                    data={[this.state.data]}
                    renderItem={ ({item}) => 
                    <View>
                        <Text>{item.pcs}</Text>
                    </View> 
                }
                />
            </View>
        )
    }
}
