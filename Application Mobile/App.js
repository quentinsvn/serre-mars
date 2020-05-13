// You can import Ionicons from @expo/vector-icons if you use Expo or
// react-native-vector-icons/Ionicons otherwise.
import * as React from 'react';
import { Text, View } from 'react-native';
import { Ionicons } from '@expo/vector-icons';
import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';
import { NavigationContainer } from '@react-navigation/native';

import HomeScreen from './components/HomeScreen';
import HumidityScreen from './components/HumidityScreen';
import DustScreen from './components/DustScreen';
import AboutScreen from './components/AboutScreen';
import Source from './components/JSONScreen';


const Tab = createBottomTabNavigator();

export default function App() {
  
  return (
    <NavigationContainer>
      <Tab.Navigator
        screenOptions={({ route }) => ({
          tabBarIcon: ({ focused, color, size }) => {
            let iconName;

            if (route.name === 'Accueil') {
              iconName = focused ? 'ios-home' : 'ios-home';
            } else if (route.name === 'Humidité'){
              iconName = focused ? 'ios-water' : 'ios-water';
            }
            else if (route.name === 'Poussière'){
              iconName = focused ? 'ios-cloud' : 'ios-cloud';
            }
            else if (route.name === 'À propos') {
              iconName = focused ? 'ios-information-circle' : 'ios-information-circle';
            }

            return <Ionicons name={iconName} size={size} color={color} />;
          },
        })}
        tabBarOptions={{
          activeTintColor: '#e84118',
          inactiveTintColor: 'gray',
        }}
      >
        <Tab.Screen name="Accueil" component={HomeScreen} />
        <Tab.Screen name="Humidité" component={HumidityScreen} />
        <Tab.Screen name="Poussière" component={DustScreen} />
        <Tab.Screen name="À propos" component={AboutScreen} />
      </Tab.Navigator>
    </NavigationContainer>
  );
}
